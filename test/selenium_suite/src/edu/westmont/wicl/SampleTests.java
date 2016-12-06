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
	
	static Boolean testProduction = true;
	static Boolean testStaging = true;
	static Boolean testLocal = true;
	static WebDriver driver;
	static List<String> addresses = new ArrayList<String>();

	
	@BeforeClass
	public static void setUpBeforeClass() throws Exception {
		if(testLocal){
			addresses.add("http://localhost:8080");
		}
		if(testProduction){
			addresses.add("http://djp3.westmont.edu/ally/ally/");
		}
		if(testStaging){
			addresses.add("http://djp3.westmont.edu/ally_staging/ally/");
		}
		
		System.setProperty("webdriver.chrome.driver", "../chromedriver.exe");
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
	public void testDonate() {
		
		for(String address:addresses){
			driver.get(address);
        
			assertTrue(driver.getTitle().equals("Ally - Santa Barbara FoodBank"));
        
			WebElement element =  driver.findElement(By.name("donatebutton"));
        
			JavascriptExecutor executor = (JavascriptExecutor)driver;
			executor.executeScript("arguments[0].click();", element);
        
			// Wait for the page to load, timeout after 10 seconds
			(new WebDriverWait(driver, 10)).until(new ExpectedCondition<Boolean>() {
				public Boolean apply(WebDriver d) {
					System.err.println(d.getTitle());
					return d.getTitle().toLowerCase().startsWith("donate");
				}
			});
        
			assertTrue(driver.getTitle().equals("Donate to Foodbank of Santa Barbara County | Classy"));
		}
	}

	@Test
	public void testGoogleCheeseQuery() {
        // And now use this to visit Google
        driver.get("http://www.google.com");
        
        // Alternatively the same thing can be done like this
        // driver.navigate().to("http://www.google.com");
        
        // Check the title of the page
        assertTrue(driver.getTitle().equals("Google"));

        // Find the text input element by its name
        WebElement element = driver.findElement(By.name("q"));

        // Enter something to search for
        element.sendKeys("Cheese!");

        // Now submit the form. WebDriver will find the form for us from the element
        element.submit();

        // Wait for the page to load, timeout after 10 seconds
        (new WebDriverWait(driver, 10)).until(new ExpectedCondition<Boolean>() {
            public Boolean apply(WebDriver d) {
                return d.getTitle().toLowerCase().startsWith("cheese!");
            }
        });
        
        // Check the title of the page
        assertTrue(driver.getTitle().equals("Cheese! - Google Search"));
	}
	
	@Test
	public void testFindFood() {
        // And now use this to visit Google
        driver.get("http://localhost:8080");
        
        // Alternatively the same thing can be done like this
        // driver.navigate().to("http://www.google.com");
        
        // Check the title of the page
        assertTrue(driver.getTitle().equals("Ally - Santa Barbara FoodBank"));

        // Find the text input element by its name
        WebElement element = driver.findElement(By.name("find_food_btn"));

        // Enter something to search for
        element.click();

        // Now submit the form. WebDriver will find the form for us from the element
        //element.submit();

        // Wait for the page to load, timeout after 10 seconds
        //(new WebDriverWait(driver, 10)).until(new ExpectedCondition<Boolean>() {
        //    public Boolean apply(WebDriver d) {
        //       return d.getTitle().toLowerCase().startsWith("cheese!");
        //    }
        //});
        
        // Check the title of the page
        assertTrue(driver.getTitle().equals("Ally - Find Food"));
	}
}
