#include <Wire.h>
#include <SPI.h>
#include <WiFi.h>

char ssid[] = "ZTE ZXHN-H208N";      //  your network SSID (name)
//char ssid[] = "UOWM-K7-WIFI";
//char ssid[] = "ZTE ZXHN-H108NS";

char pass[] = "!admin7720!";   // your network password
//char pass[] = "uowm7P123897";
//char pass[] = "tanar1953";

int status = WL_IDLE_STATUS;

// Initialize the Wifi client library
WiFiClient client;

// server address:
char server[] = "zafora.icte.uowm.gr";

unsigned long lastConnectionTime = 0; // last time you connected to the server, in milliseconds
const unsigned long postingInterval = 10L * 1000L; // delay between updates, in milliseconds

void setup()
{
  //Initialize serial and wait for port to open:
  Serial.begin(9600);

  Wire.begin();

  // check for the presence of the WiFi shield:
  if (WiFi.status() == WL_NO_SHIELD)
  {
    Serial.println("WiFi shield not present");
    // don't continue:
    while (true);
  }

  // attempt to connect to Wifi network:
  while (status != WL_CONNECTED)
  {
    Serial.print("Attempting to connect to SSID: ");
    Serial.println(ssid);
    
    // Connect to WPA/WPA2 network. Change this line if using open or WEP network:
    status = WiFi.begin(ssid, pass);

    // wait 10 seconds for connection:
    delay(10000);
  }
  
  // you're connected now, so print out the status:
  printWifiStatus();
}

//This method prints the status of the wireless connection
void printWifiStatus()
{
  // print the SSID of the network you're attached to:
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  // print your WiFi shield's IP address:
  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength:
  long rssi = WiFi.RSSI();
  Serial.print("signal strength (RSSI):");
  Serial.print(rssi);
  Serial.println(" dBm");
}

// this method makes a HTTP connection to the server:
void httpRequest()
{
  // close any connection before send a new request.
  // This will free the socket on the WiFi shield
  client.stop();

  // if there's a successful connection:
  if (client.connect(server, 80))
  {
    //Serial.println("connecting...");
    client.println("GET /~ictest00709/led_cube/com_files/default_patterns.txt");
    client.println();

    // note the time that the connection was made:
    lastConnectionTime = millis();
  }
  else
  {
    // if you couldn't make a connection:
    Serial.println("connection failed");
  }
}

void loop()
{
  // if there's incoming data from the net connection.
  // send it out the serial port.  This is for debugging
  // purposes only:
  String pattern;
  
  while (client.available())
  {
    char c = client.read(); //HERE IS THE NUMBER FROM THE SERVER

    //The number we get is the pattern selector
    pattern = c;
    ledPatternSelect(pattern);
  }
  
  // if ten seconds have passed since your last connection,
  // then connect again and send data:
  if (millis() - lastConnectionTime > postingInterval)
  {
    httpRequest();
    ledPatternSelect(pattern);

    if(pattern.equals("7"))
    {
      Serial.println("Custom pattern");
    }
  }
}

void ledPatternSelect(String pattern)
{  
  if(pattern.equals("0")) //State 0
  {
    Serial.println("All OFF");

    Wire.beginTransmission(9);
    Wire.write('0');
    Wire.endTransmission();
  }

  if(pattern.equals("1")) //State 1
  {
    Serial.println("All ON");

    Wire.beginTransmission(9);
    Wire.write('1');
    Wire.endTransmission();
  }

  if(pattern.equals("2")) //State 2
  {
    Serial.println("Led Run");

    Wire.beginTransmission(9);
    Wire.write('2');
    Wire.endTransmission();
  }

  if(pattern.equals("3")) //State 3
  {
    Serial.println("Column Run");

    Wire.beginTransmission(9);
    Wire.write('3');
    Wire.endTransmission();
  }

  if(pattern.equals("4")) //State 4
  {
    Serial.println("Random Party");

    Wire.beginTransmission(9);
    Wire.write('4');
    Wire.endTransmission();
  }

  if(pattern.equals("5")) //State 5
  {
    Serial.println("Reflective");

    Wire.beginTransmission(9);
    Wire.write('5');
    Wire.endTransmission();
  }

  if(pattern.equals("6")) //State 6
  {
    Serial.println("Test Animation");

    Wire.beginTransmission(9);
    Wire.write('6');
    Wire.endTransmission();
  }

  if(pattern.equals("7")) //State 7
  {
    Serial.println("Custom Pattern");

    Wire.beginTransmission(9);
    Wire.write('7');
    Wire.endTransmission();
  }
}
