package com.pg.user.model;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.util.Properties;
import java.util.Set;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

import org.hibernate.annotations.GenericGenerator;

import com.pg.coupon.model.ParkingCoupon;

/**
 * 
 * @author mayurb
 *
 */
@Entity
@Table(name = "user")
public class User implements Serializable {

	
	public static void main(String[] args){
		//int[] a = new int(5);
		double d =0;
		byte a =12;
		byte b = 5;
		System.out.println(a|b);
	}
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Id
	@Column(name = "id", length = 32)
	@GeneratedValue(generator = "system-uuid")
	@GenericGenerator(name = "system-uuid", strategy = "uuid")
	private String id;

	@Column(name = "first_name", length = 50, nullable = true)
	private String firstName;

	@Column(name = "last_name", length = 50, nullable = true)
	private String lastName;

	@Column(name = "mob_num", length = 50, nullable = true)
	private Integer mobileNum;

	@Column(name = "email", length = 50, nullable = true)
	private String email;

	@OneToMany(mappedBy = "user", fetch = FetchType.LAZY)
	private Set<ParkingCoupon> parkingCoupons;

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getFirstName() {
		return firstName;
	}

	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}

	public String getLastName() {
		return lastName;
	}

	public void setLastName(String lastName) {
		this.lastName = lastName;
	}

	public Integer getMobileNum() {
		return mobileNum;
	}

	public void setMobileNum(Integer mobileNum) {
		this.mobileNum = mobileNum;
	}

	public Set<ParkingCoupon> getParkingCoupons() {
		return parkingCoupons;
	}

	public void setParkingCoupons(Set<ParkingCoupon> parkingCoupons) {
		this.parkingCoupons = parkingCoupons;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	@Override
	public int hashCode() {
		int result = 1;
		result = 31 * result + ((id == null) ? 0 : id.hashCode());
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj) {
			return true;
		}
		if (obj != null && this.getClass() == org.hibernate.Hibernate.getClass(obj)) {
			User user = (User) obj;
			return user.getId() != null && user.getId().equals(this.getId());
		} else {
			return false;
		}
	}

}
