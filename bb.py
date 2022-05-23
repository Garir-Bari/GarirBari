from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/garirbari/COHomeCarDetails.html")


inputUsername= driver.find_element_by_id('btnChange')


inputUsername.send_keys('1')



#oldTitle = driver.title
inputBtn.click()
#newTitle = driver.title

# if(oldTitle == newTitle):
# 	print('invalid pass')
# else:
# 	print('logged in!')


while(True):
	continue