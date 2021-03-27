package day_7;

public class Lcm {
    public static void main(String[] args) {
        int a=12, b= 24,end=a*b;
        int max;
        int ans =end;
        if(a>b)
            max=a;
        else max=b;

        int start= max;
        while(start<=end){
            if(start%a==0 && start%b==0)
                ans =start;
            break;
        }

        System.out.println(ans);

    }
}
