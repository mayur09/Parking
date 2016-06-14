package com.pg.coupon.dao.impl;

import org.springframework.stereotype.Repository;

import com.pg.coupon.dao.CouponDao;
import com.pg.coupon.model.ParkingCoupon;
import com.pmcretail.common.dao.impl.GenericDaoImpl;

@SuppressWarnings("unchecked")
@Repository("couponDao")
public class CouponDaoImpl extends GenericDaoImpl<ParkingCoupon, String> implements CouponDao {

}
