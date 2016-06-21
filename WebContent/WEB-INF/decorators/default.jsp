<html>
<head>
<title><sitemesh:write property='title' /> | <spring:message
		code="webapp.name" /></title>
</head>
<body>

	<div id="ajaxProcessingImage" class="page-loading-overlay loaded">
		<div class="loader-2"></div>
	</div>

	<div id="ajaxProcessingDiv" class="load_circle_wrapper loaded">
		<div class="loading_spinner">
			<div id="wrap_spinner">
				<div class="loading outer">
					<div class="loading inner"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Includes the header page. -->
	<jsp:include page="../views/common/header.jsp" />

	<!-- Includes the body page. -->
	<div class="main-page">
		<div class="left-panel">
			<jsp:include page="../views/common/menu.jsp" />
		</div>
		<div class="right-cont">

			<span id="tradingregionOrStoreId" class="hide"><spring:message
					code='all.value' /></span> <span class="hide"
				id="tradingregionOrStoreName"><spring:message code='all' /></span>
			<span class="hide" id="selectStore"><spring:message
					code='please.select.store' /></span> <span class="hide" id="selectDrawer"><spring:message
					code='please.select' /></span> <span class="hide" id="noDataError"><spring:message
					code='error.data.not.found' /></span> <span class="hide" id="projectRoot"><spring:message
					code='root' /></span>

			<sitemesh:write property='body' />
			<!-- Includes the footer page. -->
			<jsp:include page="../views/common/footer.jsp" />
		</div>
	</div>
	<a href="#" class="scrollToTop"></a>

	<!-- This is for alert if configuration feature not available -->
	<div class="modal fade " id="alertpop">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only"><spring:message
								code="close" /></span>
					</button>
					<h4 class="modal-title">
						<spring:message code="alert" />
					</h4>
				</div>
				<div class="modal-body ">
					<div class="margin10-bottom">
						<div class="row">
							<div class="col-md-3 text-center">
								<img src="resources/images/icon-lock.svg" height="50px" alt="" />
							</div>
							<div class="col-md-9">
								<strong class="color-error font-size-medium"> <spring:message
										code="config.feature.store.access.denied" />
								</strong><br> <span id="configFeatureAlertMessage"></span>
								<%-- <spring:message code="config.feature.store.not.available" />  --%>
							</div>
						</div>
					</div>
					<!--<strong class="color-error font-size-medium"> Access Denied</strong><br>-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						<spring:message code="back" />
					</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</body>
</html>