import java.util.Scanner;

public class Methods
{
    public static void getRequirements()
    {
        System.out.println("Developer: Celina Phal");
        System.out.println("Sphere Volume Program.");
        System.out.println("Program calculates sphere volume in liquid U.S. gallons from user-entered diameter value in inches,");
        System.out.println("and rounds to two decimal places.");
        System.out.println("Must use Java's *built-in* PI and pow() capabilities.");
        System.out.println("Program checks for non-integers and non-numeric values.");
        System.out.println("Program continues to prompt for user entry until no longer requested, prompt accepts upper of lower case letters.");
        System.out.println();
    }
    public static void getSphereVolume()
    {
        int diameter = 0;
        double volume = 0.0;
        public static void getSphereVolume()
        double gallons = 0.0;
        char choice = ''; //initialize to space character
        Scanner sc = new Scanner(System.in);
//Note: do...while will *always* execute at least *once*!
do
{
System.out.print("Please enter diameter in inches: ");
while (!sc.hasNextInt())
{
System.out.println("Not valid integer!\n");
sc.next();//Important! If omitted, will go into infinite loop on invalid input!
System.out.print("Please try again. Enter diameter in inches: ");
}
diameter = sc.nextInt();
System.out.println(); // print blank line
//Note: *must* use floating point values, otherwise, integer division (i.e., incorrect result)!
volume = ((4.0/3.0) * Math. PI * Math.pow(diameter/2.0, 3)); // returns cubic inches
gallons = volume/231; //convert cubic inches into gallons
System.out. printin("Sphere volume: " + String. format(™*,.2P", gallons) + " liquid U.S. gallons");
System.out. print nDo you want to calculate another sphere volume (y or n)? ");
choice = sc.next() charAt(0);
choice = Character. toLowerCase(choice);
}
while (choice == 'y');
System.out. printin("\nThank you for using our Sphere Volume Calculator!");
    }