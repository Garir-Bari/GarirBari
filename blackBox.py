from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/garirbari/parkingownerlogin.php")

# find_element(by=By.NAME, value=name)
inputUsername= driver.find_element_by_name('email')
# inputUsername= driver.find_element(by=By.NAME, value='email')
inputPass= driver.find_element_by_name('password')
inputBtn= driver.find_element_by_name('logMain_Button1')
#inputBtn= driver.find_element_by_class('btn')

inputUsername.send_keys('s@gmail.com')
inputPass.send_keys('1234')


oldTitle = driver.title
inputBtn.click()
newTitle = driver.title

if(oldTitle == newTitle):
	print('invalid pass')
else:
	print('logged in!')


while(True):
	continue