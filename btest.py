from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time
from selenium.webdriver.common.alert import Alert

driver = webdriver.Chrome(ChromeDriverManager().install())
# driver.get("http://localhost/garirbari/POHome.php")
driver.get("http://localhost/garirbari/POHomeViewProfile.html")



btn2 = driver.find_element_by_xpath('//*[@id="btnChange"]')
btn2.click();


Alert(driver).send_keys("s@gmail.com")
Alert(driver).accept() ;

time.sleep(2)

result = driver.find_element_by_xpath('//*[@id="p2"]') #p2=name 'Shahadat'
time.sleep(3)

print('before if else \n')
if (result.text == 'Your name: Shahadat'):
	print('Matched')
else:
	print('Not Matched! Expected: Your name: Shahadat, Received: ' + result.text)


# x = input()
#while True:
 	#pass
while(True):
 	continue