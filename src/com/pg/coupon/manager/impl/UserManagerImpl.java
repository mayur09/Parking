package com.pg.coupon.manager.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.parking.common.dao.GenericDao;
import com.parking.common.security.manager.impl.GenericManagerImpl;
import com.pg.coupon.manager.CouponManager;
import com.pg.coupon.manager.UserManager;
import com.pg.coupon.model.ParkingCoupon;
import com.pg.user.model.User;

@Service("userManager")
public class UserManagerImpl extends GenericManagerImpl<User, String> implements UserManager {

	@Autowired
	@Qualifier("couponManager")
	private CouponManager couponManager;

	@Autowired
	public UserManagerImpl(@Qualifier("userDao") GenericDao<User, String> genericDao) {
		super(genericDao);

	}

	@Transactional
	public ParkingCoupon saveUserAndCoupon(User user) {
		save(user);
		ParkingCoupon coupon = new ParkingCoupon();
		coupon.setUser(user);
		return couponManager.saveCoupon(coupon);

	}
}
