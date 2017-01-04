<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage HTML_Email
 * @since 1.0
 * @version 1.0
 */

?>

																</td>
                              </tr>
                            </table>
                            <!-- // End Module: Standard Content \\ -->

                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              <!-- // End Template Body \\ -->
            	</td>
          </tr>
          <tr>
            <td id="colophon" align="center" valign="top">
              <!-- // Begin Template Footer \\ -->
              <table border="0" cellpadding="10" cellspacing="0" width="876" id="templateFooter" class="site-footer" role="contentinfo">
                <tr>
                  <td valign="top" class="footerContent">

                    <!-- // Begin Module: Standard Footer \\ -->
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                      <tr>
                        <td colspan="2" valign="middle" id="social">
                          <div mc:edit="std_utility">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                          </div>
                        </td>
                      </tr>
                    </table><!-- // End Module: Standard Footer \\ -->

                	</td>
              	</tr>
              </table><!-- // End Template Footer \\ -->
          	</td>
        	</tr>
        </table>
        <br />
      </td>
    </tr>
  </table>
</center>
<?php
// Controversy! I'm commenting out wp_footer which may break plugins
// We want to keep these emails basic to ensure they work as much as possible
// wp_footer(); ?>
</body>
</html>
