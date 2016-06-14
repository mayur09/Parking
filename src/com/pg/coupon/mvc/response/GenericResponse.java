/* Copyright 2014 Paul Mason Consulting Ltd. All rights reserved. Used by permission. */
package com.pg.coupon.mvc.response;

/**
 * Generic Response used to set status and result object
 * 
 * @author qureshia
 * @version 1.0
 */
public class GenericResponse {

	private String status;
	private Object result;

	public String getStatus() {
		return status;
	}

	public void setStatus(String status) {
		this.status = status;
	}

	public Object getResult() {
		return result;
	}

	public void setResult(Object result) {
		this.result = result;
	}

}
