<?php

class TestRewriteEndpoint extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();

		$this->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );

		$this->qvs = $GLOBALS['wp']->public_query_vars;

		// print_r( $this->qvs );
	}

	public function tearDown() {
		$GLOBALS['wp']->public_query_vars = $this->qvs;
		parent::tearDown();
	}

	public function test_is_custom_endpoint_added() {
		$this->assertContains( 'custom-endpoint', $GLOBALS['wp']->public_query_vars );
	}

	public function test_is_custom_endpoint_2_added() {
		$this->assertContains( 'custom-endpoint-2', $GLOBALS['wp']->public_query_vars );
	}
}
