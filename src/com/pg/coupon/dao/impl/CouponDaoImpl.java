package com.pg.coupon.dao.impl;

import org.springframework.stereotype.Repository;

import com.parking.common.dao.impl.GenericDaoImpl;
import com.pg.coupon.dao.CouponDao;
import com.pg.coupon.model.ParkingCoupon;

@SuppressWarnings("unchecked")
@Repository("couponDao")
public class CouponDaoImpl extends GenericDaoImpl<ParkingCoupon, String> implements CouponDao {

}
