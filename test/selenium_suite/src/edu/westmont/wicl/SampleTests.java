package edu.westmont.wicl;

import static org.junit.Assert.*;

import java.util.ArrayList;
import java.util.List;

import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedCondition;
import org.openqa.selenium.support.ui.WebDriverWait;


public class SampleTests {
	
	static Boolean testProduction = false;
	static Boolean testStaging = false;
	static Boolean testLocal = true;
	static WebDriver driver;
	static List<String> addresses = new ArrayList<String>();

	
	@BeforeClass
	public static void setUpBeforeClass() throws Exception {
		if(testLocal){
			addresses.add("http://localhost:8080/ally");
		}
		if(testProduction){
			addresses.add("http://djp3.westmont.edu/ally/ally/");
		}
		if(testStaging){
			addresses.add("http://djp3.westmont.edu/ally_staging/ally/");
		}
		
		if(System.getProperty("os.name").contains("indows")){
			System.setProperty("webdriver.chrome.driver", "../chromedriver.exe");
		}
		else{
			System.setProperty("webdriver.chrome.driver", "../chromedriver");
		}
	
        // Create a new instance of the Google driver
        // Notice that the remainder of the code relies on the interface, 
        // not the implementation.
        driver = new ChromeDriver();
	}

	@AfterClass
	public static void tearDownAfterClass() throws Exception {
		driver.quit();
	}

	@Before
	public void setUp() throws Exception {
	}

	@After
	public void tearDown() throws Exception {
	}
	
	@Test
	public void testSystemUp() {
		
		for(String address:addresses){
			driver.get(address);
        
			assertTrue(driver.getTitle().contains("Ally"));
		}
	}
	
	@Test
	public void testAboutButton(){
		
		for(String address:addresses){
			assertTrue(driver.getTitle().equals("Ally - Santa Barbara FoodBank"));
	        
			WebElement element =  driver.findElement(By.name("aboutbutton"));
        
			JavascriptExecutor executor = (JavascriptExecutor)driver;
			
			//maximize the brow
			driver.manage().window().maximize();
			
			executor.executeScript("arguments[0].click();", element);
			
			System.out.println(driver.getTitle());
			assertTrue(driver.getTitle().equals("404 Not Found"));
		}
	}
	

	@Test
	public void test_IndexPhp_ButtonFindFood() {
		
		for(String address:addresses){
			driver.get(address);
        
			// Check the title of the page
			assertTrue(driver.getTitle().equals("Ally - Santa Barbara FoodBank"));

			// Find the text input element by its name
			WebElement element = driver.findElement(By.name("find_food_button"));

			element.click();

			assertTrue(driver.getTitle().equals("Ally - Find Food"));
		}
	}
	
	
	@Test
	public void testButtonFindOtherResources() {
		
		for(String address:addresses){
			driver.get(address);
        
			// Check the title of the page
			assertTrue(driver.getTitle().equals("Ally - Santa Barbara FoodBank"));

			// Find the text input element by its name
			WebElement element = driver.findElement(By.name("find_other_resources_btn"));

			// Enter something to search for
			element.click();

			// Check the title of the page
			assertTrue(driver.getTitle().equals("Ally - Find Other Resorces"));
		}
	}
	
	@Test
	public void testButtonDonate() {
		
		for(String address:addresses){
			driver.get(address);
        
			assertTrue(driver.getTitle().equals("Ally - Santa Barbara FoodBank"));
        
			WebElement element =  driver.findElement(By.name("donatebutton"));
        
			JavascriptExecutor executor = (JavascriptExecutor)driver;
			executor.executeScript("arguments[0].click();", element);
        
			// Wait for the page to load, timeout after 10 seconds
			(new WebDriverWait(driver, 10)).until(new ExpectedCondition<Boolean>() {
				public Boolean apply(WebDriver d) {
					return d.getTitle().toLowerCase().startsWith("donate");
				}
			});
        
			assertTrue(driver.getTitle().equals("Donate to Foodbank of Santa Barbara County | Classy"));
		}
	}

	
	

}
