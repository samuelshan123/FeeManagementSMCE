package in.samuel.feemanagementsmce;


public class User {

    private int id;
    private int regno;
    private String username,dob;

    public User(int id, String username, int regno, String dob) {
        this.id = id;
        this.username = username;
        this.regno = regno;
        this.dob = dob;
    }

    public int getId() {
        return id;
    }

    public String getUsername() {
        return username;
    }

    public int getRegno() {
        return regno;
    }

    public String getDob() {
        return dob;
    }
}
