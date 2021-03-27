package day_6;

public class CheckPrimeNumber {
    public static void main(String[] args) {
        int i = 106;
        int count = 0;
        int y = (int) Math.sqrt(i);
        for (int n = 2; n <= y; n++) {
            if (i % n == 0) {
                count++;
                break;
            }
            System.out.println(count + " ");
        }
        if (count > 0) {
            System.out.println(i + " is not a prime number");
        } else {
            System.out.println(i + " is a prime number");
        }
    }
}
