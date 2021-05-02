package in.samuel.feemanagementsmce;


public class User {

    private int id;
    private String regno;
    private String username,dob,total;

    public User(int id, String username, String regno, String dob,String total) {
        this.id = id;
        this.username = username;
        this.regno = regno;
        this.dob = dob;
        this.total = total;
    }

    public int getId() {
        return id;
    }

    public String getUsername() {
        return username;
    }

    public String getRegno() {
        return regno;
    }

    public String getDob() {
        return dob;
    }

    public String getTotal() {
        return total;
    }
}
