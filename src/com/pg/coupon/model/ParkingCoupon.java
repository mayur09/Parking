package com.pg.coupon.model;

import java.io.Serializable;
import java.util.Calendar;
import java.util.HashSet;
import java.util.Set;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.JoinTable;
import javax.persistence.ManyToMany;
import javax.persistence.Table;

import org.hibernate.annotations.GenericGenerator;

import com.pg.user.model.User;

@Entity
@Table(name = "parking_coupon")
public class ParkingCoupon implements Serializable {

	private static String DEFAULT_NAME = "Parking Coupon";
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Id
	@Column(name = "id", length = 32)
	@GeneratedValue(generator = "system-uuid")
	@GenericGenerator(name = "system-uuid", strategy = "uuid")
	private String id;

	@Column(name = "name", length = 50, nullable = true)
	private String name = DEFAULT_NAME;

	@Column(name = "expiry_date")
	private Calendar expiryDate;

	@Column(name = "expired")
	private boolean expired;

	@Column(name = "claimed")
	private boolean claimed;

	@Column(name = "claim_date")
	private Calendar claimDate;

	@ManyToMany
	@JoinTable(name = "coupon_location", joinColumns = {
			@JoinColumn(name = "coupon_id", nullable = true) }, inverseJoinColumns = {
					@JoinColumn(name = "location_id", nullable = true) })
	protected Set<ParkingLocation> parkingLocations = new HashSet<ParkingLocation>();

	private User user;

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public boolean isExpired() {
		return expired;
	}

	public void setExpired(boolean expired) {
		this.expired = expired;
	}

	public boolean isClaimed() {
		return claimed;
	}

	public void setClaimed(boolean claimed) {
		this.claimed = claimed;
	}

	public Calendar getClaimDate() {
		return claimDate;
	}

	public void setClaimDate(Calendar claimDate) {
		this.claimDate = claimDate;
	}

	public Calendar getExpiryDate() {
		return expiryDate;
	}

	public void setExpiryDate(Calendar expiryDate) {
		this.expiryDate = expiryDate;
	}

	public Set<ParkingLocation> getParkingLocations() {
		return parkingLocations;
	}

	public void setParkingLocations(Set<ParkingLocation> parkingLocations) {
		this.parkingLocations = parkingLocations;
	}

	public User getUser() {
		return user;
	}

	public void setUser(User user) {
		this.user = user;
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
			ParkingCoupon parkingCoupon = (ParkingCoupon) obj;
			return parkingCoupon.getId() != null && parkingCoupon.getId().equals(this.getId());
		} else {
			return false;
		}
	}

}
