package day_7;

public class Gcd {
    public static void main(String[] args) {
        int a=9,b =12,min;
        int lcd =1;
        if(a>b)
            min=b;
        else min=a;

        for(int i=1;i<=min;i++)
        {
            if(a%i==0 && b%i==0)
                lcd=i;
        }
        System.out.println(lcd);


        }

    }

