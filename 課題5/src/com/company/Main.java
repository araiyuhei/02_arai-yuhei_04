package com.company;
import java.util.Scanner;
public class Main {


    public static void main(String[] args) {
	    Scanner scanner = new Scanner(System.in);
        String str = scanner.next();



        int result = add(3, 2);// write your code here //1, 5

        System.out.println(result); //6

        sayYeah();

    }

    static int add(int a, int b){  //2
        int result =a + b;  //3
        return result;     //4
    }

    static void sayYeah(){
        System.out.println("Yeah");
    }
}
