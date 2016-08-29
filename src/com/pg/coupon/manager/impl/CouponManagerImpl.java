package com.pg.coupon.manager.impl;

import java.util.Calendar;
import java.util.HashSet;
import java.util.Set;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.parking.common.dao.GenericDao;
import com.parking.common.security.manager.impl.GenericManagerImpl;
import com.pg.coupon.manager.CouponManager;
import com.pg.coupon.model.ParkingCoupon;
import com.pg.coupon.model.ParkingLocation;

@Service("couponManager")
public class CouponManagerImpl extends GenericManagerImpl<ParkingCoupon, String> implements CouponManager {

	@Autowired
	public CouponManagerImpl(@Qualifier("couponDao") GenericDao<ParkingCoupon, String> genericDao) {
		super(genericDao);

	}

	@Transactional
	public ParkingCoupon saveCoupon(ParkingCoupon parkingCoupon) {

		Calendar expiryDate = Calendar.getInstance();
		expiryDate.add(Calendar.MONTH, 1);
		parkingCoupon.setName("mayur");
		parkingCoupon.setExpiryDate(expiryDate);
		ParkingLocation parkingLocation = new ParkingLocation();
		parkingLocation.setId("1");

		Set<ParkingLocation> parkingLocationSet = new HashSet<ParkingLocation>();
		parkingLocationSet.add(parkingLocation);
		parkingCoupon.setParkingLocations(parkingLocationSet);
		return genericDao.save(parkingCoupon);
	}
}
