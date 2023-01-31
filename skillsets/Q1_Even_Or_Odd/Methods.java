import java.util.Scanner; 

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("Developer: Celina Phal");
        System.out.println("Program evaluates integers at even or odd.");
        System.out.println("Note: Program does not *not* check for non-numeric characters.");
        System.out.println();
    }
    public static void evaluateNumber()
    {
        int x = 0;
        System.out.print("Enter integer: ");
        Scanner sc = new Scanner(System.in);
        x = sc.nextInt();

        if(x % 2 == 0)
        {
            System.out.println(x + " is an even number.");
        }
        else 
        {
            System.out.println(x + " is an odd number.");
        }
        sc.close();
    }
}