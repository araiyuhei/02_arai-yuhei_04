package com.company;

public class ObjectPractice04 {
    public class person {
    private String name;
    private String origin;

    public person(String name, String origin){
        this.name = name;
        this.origin = origin;

    }


    public void selfIntroduction(){
        System.out.println("私の名前は"+this.name+"です。"+this.origin+"出身");
    }
    }
}
