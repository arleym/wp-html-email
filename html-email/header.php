<?php /**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until content
 *
 * @package WordPress
 * @subpackage HTML_Email
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php
  // Controversy! I'm commenting out wp_head which may break plugins
  // We want to keep these emails basic to ensure they work as much as possible
  // wp_head(); ?>

<style type="text/css">
  <?php/* Client-specific Styles */ ?>
  #outlook a{padding:0;}<?php/* Force Outlook to provide a "view in browser" button. */?>
  body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}<?php/* Force Hotmail to display emails at full width */?>
  body{-webkit-text-size-adjust:none;}<?php/* Prevent Webkit platforms from changing default text sizes. */?>

  <?php/* Reset Styles */?>
  body{margin:0; padding:0;}
  img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
  table td{border-collapse:collapse;}
  #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

  <?php/* Template Styles */?>

  <?php/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */?>

  <?php /**
  * @tab Page
  * @section background color
  * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
  * @theme page
  */ ?>
  body, #backgroundTable{
    <?php/*@editable*/?> background-color:#FAFAFA;
  }

  <?php /**
  * @tab Page
  * @section email border
  * @tip Set the border for your email.
  */ ?>
  #templateContainer{
    <?php/*@editable*/?> border: 1px solid #DDDDDD;
  }

  <?php /**
  * @tab Page
  * @section heading 1
  * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
  * @style heading 1
  */ ?>
  h1, .h1{
    <?php/*@editable*/?> color:#202020;
    display:block;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:34px;
    <?php/*@editable*/?> font-weight:bold;
    <?php/*@editable*/?> line-height:100%;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Page
  * @section heading 2
  * @tip Set the styling for all second-level headings in your emails.
  * @style heading 2
  */ ?>
  h2, .h2{
    <?php/*@editable*/?> color:#202020;
    display:block;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:30px;
    <?php/*@editable*/?> font-weight:bold;
    <?php/*@editable*/?> line-height:100%;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Page
  * @section heading 3
  * @tip Set the styling for all third-level headings in your emails.
  * @style heading 3
  */ ?>
  h3, .h3{
    <?php/*@editable*/?> color:#202020;
    display:block;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:26px;
    <?php/*@editable*/?> font-weight:bold;
    <?php/*@editable*/?> line-height:100%;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Page
  * @section heading 4
  * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
  * @style heading 4
  */ ?>
  h4, .h4{
    <?php/*@editable*/?> color:#202020;
    display:block;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:22px;
    <?php/*@editable*/?> font-weight:normal;
    <?php/*@editable*/?> line-height:100%;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    <?php/*@editable*/?> text-align:left;
  }
  h5, .h5{
    <?php/*@editable*/?> color:#888;
    display:block;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:18px;
    <?php/*@editable*/?> font-weight:bold;
    <?php/*@editable*/?> line-height:22px;
    margin-top:0;
    margin-right:0;
    margin-bottom:10px;
    margin-left:0;
    <?php/*@editable*/?> text-align:left;
  }
  .subtitle {
    color: #009900;
    margin-top: 15px;
    font-size: 20px;
    text-transform: uppercase;
  }

  <?php/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: PREHEADER /\/\/\/\/\/\/\/\/\/\ */?>

  <?php /**
  * @tab Header
  * @section preheader style
  * @tip Set the background color for your email's preheader area.
  * @theme page
  */ ?>
  #templatePreheader{
    <?php/*@editable*/?> background-color:#FAFAFA;
  }

  <?php /**
  * @tab Header
  * @section preheader text
  * @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
  */ ?>
  .preheaderContent div{
    <?php/*@editable*/?> color:#505050;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:10px;
    <?php/*@editable*/?> line-height:100%;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Header
  * @section preheader link
  * @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
  */ ?>
  .preheaderContent div a:link, .preheaderContent div a:visited, /* Yahoo! Mail Override */ .preheaderContent div a .yshortcuts /* Yahoo! Mail Override */{
    <?php/*@editable*/?> color:#336699;
    <?php/*@editable*/?> font-weight:normal;
    <?php/*@editable*/?> text-decoration:underline;
  }

  <?php/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */?>

  <?php /**
  * @tab Header
  * @section header style
  * @tip Set the background color and border for your email's header area.
  * @theme header
  */ ?>
  #templateHeader{
    <?php/*@editable*/?> background-color:#FFFFFF;
    <?php/*@editable*/?> border-bottom:0;
  }

  <?php /**
  * @tab Header
  * @section header text
  * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
  */ ?>
  .headerContent{
    <?php/*@editable*/?> color:#202020;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:34px;
    <?php/*@editable*/?> font-weight:bold;
    <?php/*@editable*/?> line-height:100%;
    <?php/*@editable*/?> padding:0;
    <?php/*@editable*/?> text-align:center;
    <?php/*@editable*/?> vertical-align:middle;
  }

  <?php /**
  * @tab Header
  * @section header link
  * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
  */ ?>
  .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
    <?php/*@editable*/?> color:#336699;
    <?php/*@editable*/?> font-weight:normal;
    <?php/*@editable*/?> text-decoration:underline;
  }

  #headerImage{
    height:auto;
    max-width:876px;
  }

  <?php/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */?>

  <?php /**
  * @tab Body
  * @section body style
  * @tip Set the background color for your email's body area.
  */ ?>
  #templateContainer, .bodyContent{
    <?php/*@editable*/?> background-color:#FFFFFF;
  }

  <?php /**
  * @tab Body
  * @section body text
  * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
  * @theme main
  */ ?>
  .bodyContent div{
    <?php/*@editable*/?> color:#505050;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:14px;
    <?php/*@editable*/?> line-height:150%;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Body
  * @section body link
  * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
  */ ?>
  .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
    <?php/*@editable*/?> color:#336699;
    <?php/*@editable*/?> font-weight:normal;
    <?php/*@editable*/?> text-decoration:underline;
  }

  .bodyContent img{
    display:inline;
    height:auto;
  }

  <?php/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: SIDEBAR /\/\/\/\/\/\/\/\/\/\ */?>

  <?php /**
  * @tab Sidebar
  * @section sidebar style
  * @tip Set the background color and border for your email's sidebar area.
  */ ?>
  #templateSidebar{
    <?php/*@editable*/?> background-color:#FFFFFF;
    <?php/*@editable*/?> border-right:0;
  }

  <?php /**
  * @tab Sidebar
  * @section sidebar text
  * @tip Set the styling for your email's sidebar text. Choose a size and color that is easy to read.
  */ ?>
  .sidebarContent div{
    <?php/*@editable*/?> color:#505050;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:12px;
    <?php/*@editable*/?> line-height:150%;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Sidebar
  * @section sidebar link
  * @tip Set the styling for your email's sidebar links. Choose a color that helps them stand out from your text.
  */ ?>
  .sidebarContent div a:link, .sidebarContent div a:visited, /* Yahoo! Mail Override */ .sidebarContent div a .yshortcuts /* Yahoo! Mail Override */{
    <?php/*@editable*/?> color:#336699;
    <?php/*@editable*/?> font-weight:normal;
    <?php/*@editable*/?> text-decoration:underline;
  }

  .sidebarContent img{
    display:inline;
    height:auto;
  }

  <?php/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */?>

  <?php /**
  * @tab Footer
  * @section footer style
  * @tip Set the background color and top border for your email's footer area.
  * @theme footer
  */ ?>
  #templateFooter{
    <?php/*@editable*/?> background-color:#FFFFFF;
    <?php/*@editable*/?> border-top:0;
  }

  <?php /**
  * @tab Footer
  * @section footer text
  * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
  * @theme footer
  */ ?>
  .footerContent div{
    <?php/*@editable*/?> color:#707070;
    <?php/*@editable*/?> font-family:Arial;
    <?php/*@editable*/?> font-size:12px;
    <?php/*@editable*/?> line-height:125%;
    <?php/*@editable*/?> text-align:left;
  }

  <?php /**
  * @tab Footer
  * @section footer link
  * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
  */ ?>
  .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
    <?php/*@editable*/?> color:#336699;
    <?php/*@editable*/?> font-weight:normal;
    <?php/*@editable*/?> text-decoration:underline;
  }

  .footerContent img{
    display:inline;
  }

  <?php /**
  * @tab Footer
  * @section social bar style
  * @tip Set the background color and border for your email's footer social bar.
  * @theme footer
  */ ?>
  #social{
    <?php/*@editable*/?> background-color:#FAFAFA;
    <?php/*@editable*/?> border:0;
  }

  <?php /**
  * @tab Footer
  * @section social bar style
  * @tip Set the background color and border for your email's footer social bar.
  */ ?>
  #social div{
    <?php/*@editable*/?> text-align:center;
  }

  <?php /**
  * @tab Footer
  * @section utility bar style
  * @tip Set the background color and border for your email's footer utility bar.
  * @theme footer
  */ ?>
  #utility{
    <?php/*@editable*/?> background-color:#FFFFFF;
    <?php/*@editable*/?> border:0;
  }

  <?php /**
  * @tab Footer
  * @section utility bar style
  * @tip Set the background color and border for your email's footer utility bar.
  */ ?>
  #utility div{
    <?php/*@editable*/?> text-align:center;
  }

  .bodyContent .dim,
  .bodyContent .dim .subtitle {
    color: #999;
  }
</style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
  <center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
      <tr>
        <td align="center" valign="top">
          <!-- // Begin Template Preheader \\ -->
          <table border="0" cellpadding="10" cellspacing="0" width="876" id="templatePreheader">
            <tr>
              <td valign="top" class="preheaderContent">
                <!-- // Begin Module: Standard Preheader \ -->
                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                  <tr>
                    <td valign="top">
                      <div mc:edit="std_preheader_content">
                        <?php $description = get_bloginfo( 'description', 'display' );
                          if ( $description || is_customize_preview() ) : ?>
                            <?php echo $description; ?>
                          <?php endif; ?>
                      </div>
                    </td>
                    <td align="right">
                      <a href="<?php the_permalink(); ?>">View in Browser</a>
                    </td>
                  </tr>
                </table><!-- // End Module: Standard Preheader \ -->
              </td>
            </tr>
          </table><!-- // End Template Preheader \\ -->
          <table border="0" cellpadding="0" cellspacing="0" width="876" id="templateContainer">
            <tr>
              <td align="center" valign="top">
                <!-- // Begin Template Header \\ -->
                <table border="0" cellpadding="0" cellspacing="0" width="876" id="templateHeader" role="banner">
                  <tr>
                    <td class="headerContent">

                      <!-- // Begin Module: Standard Header Image \\ -->
                      <?php the_custom_logo(); ?>
                      <?php
                      // If a regular post or page, and not the front page, show the featured image.
                      if ( has_post_thumbnail() && ( is_single() || ( is_page() ) ) ) :
                      the_post_thumbnail( 'htmlemail-featured-image' );
                      endif;
                      ?><!-- // End Module: Standard Header Image \\ -->

                    </td>
                  </tr>
                </table><!-- // End Template Header \\ -->
              </td>
            </tr>
            <tr>
              <td align="center" valign="top">
                <!-- // Begin Template Body \\ -->
                <table border="0" cellpadding="0" cellspacing="0" width="876" id="templateBody">
                  <tr>
                    <!-- // Begin Sidebar \\  -->
                    <td valign="top" width="200" id="templateSidebar">
                      <table border="0" cellpadding="0" cellspacing="0" width="200">
                        <tr>
                          <td valign="top" class="sidebarContent">
                            <!-- // Begin Module: Top Image with Content \\ -->
                            <table border="0" cellpadding="40" cellspacing="0" width="100%">
                              <tr mc:repeatable>
                                <td valign="top">
                                  <div mc:edit="tiwc200_content00">

                                    <?php // sidebar ?>

                                  </div>
                                </td>
                              </tr>
                            </table><!-- // End Module: Top Image with Content \\ -->

                          </td>
                        </tr>
                      </table>
                    </td><!-- // End Sidebar \\ -->
                    <td valign="top">
                      <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="top" class="bodyContent">
                            <table border="0" cellpadding="40" cellspacing="0" width="100%">
                              <tr>
                                <td valign="top">

