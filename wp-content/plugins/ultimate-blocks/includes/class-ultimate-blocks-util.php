<?php
/**
 * Block utilities.
 *
 * @package ultimate-blocks
 */

/**
 * Fired during plugin activation
 *
 * @link       http://imtiazrayhan.com/
 * @since      1.0.2
 *
 * @package    ultimate_blocks
 * @subpackage ultimate_blocks/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.2
 * @package    ultimate_blocks
 * @subpackage ultimate_blocks/includes
 * @author     Imtiaz Rayhan <imtiazrayhan@gmail.com>
 */
class Ultimate_Blocks_Util {

	/**
	 * Get all Blocks.
	 *
	 * @return array
	 * @since    1.0.2
	 */
	public static function blocks() {

		return array(
			array(
				'label'  => 'Advanced Heading',
				'name'   => 'ub/advanced-heading',
				'active' => true,
			),
			array(
				'label'  => 'Advanced Video',
				'name'   => 'ub/advanced-video',
				'active' => true,
			),
			array(
				'label'  => 'Button (Improved)',
				'name'   => 'ub/button',
				'active' => true,
			),
			array(
				'label'  => 'Call To Action',
				'name'   => 'ub/call-to-action-block',
				'active' => true,
			),
			array(
				'label'  => 'Click To Tweet',
				'name'   => 'ub/click-to-tweet',
				'active' => true,
			),
			array(
				'label'  => 'Content Filter',
				'name'   => 'ub/content-filter-block',
				'active' => true,
			),
			array(
				'label'  => 'Content Toggle',
				'name'   => 'ub/content-toggle-block',
				'active' => true,
			),
			array(
				'label'  => 'Countdown',
				'name'   => 'ub/countdown',
				'active' => true,
			),
			array(
				'label'  => 'Divider',
				'name'   => 'ub/divider',
				'active' => true,
			),
			array(
				'label'  => 'Expand',
				'name'   => 'ub/expand',
				'active' => true,
			),
			array(
				'label'  => 'How To',
				'name'   => 'ub/how-to',
				'active' => true,
			),
			array(
				'label'  => 'Image Slider',
				'name'   => 'ub/image-slider',
				'active' => true,
			),
			array(
				'label'  => 'Post Grid',
				'name'   => 'ub/post-grid',
				'active' => true,
			),
			array(
				'label'  => 'Progress Bar',
				'name'   => 'ub/progress-bar',
				'active' => true,
			),
			array(
				'label'  => 'Review',
				'name'   => 'ub/review',
				'active' => true,
			),
			array(
				'label'  => 'Social Share',
				'name'   => 'ub/social-share',
				'active' => true,
			),
			array(
				'label'  => 'Star Rating',
				'name'   => 'ub/star-rating-block',
				'active' => true,
			),
			array(
				'label'  => 'Styled Box',
				'name'   => 'ub/styled-box',
				'active' => true,
			),
			array(
				'label'  => 'Styled List',
				'name'   => 'ub/styled-list',
				'active' => true,
			),
			array(
				'label'  => 'Tabbed Content',
				'name'   => 'ub/tabbed-content-block',
				'active' => true,
			),
			array(
				'label'  => 'Table of Contents',
				'name'   => 'ub/table-of-contents-block',
				'active' => true,
			),
			array(
				'label'  => 'Testimonial',
				'name'   => 'ub/testimonial',
				'active' => true,
			),
			array(
				'label'  => 'Icon',
				'name'   => 'ub/icon',
				'active' => true,
			),
			array(
				'label'  => 'Counter',
				'name'   => 'ub/counter',
				'active' => true,
			),
		);
	}
	/**
	 * Get all Extensions.
	 *
	 * @return array
	 * @since    3.0.9
	 */
	public static function extensions(){
		return array(
			array(
				'label'  	=> 'Responsive Control',
				'name'   	=> 'responsive-control',
				'active' 	=> true,
				'pro'	=> false,
				'icon'   	=> '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="24" height="24" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M16.4279 10.2453H14.3543C14.1965 10.2453 14.054 10.3105 13.9499 10.4191C13.8465 10.5259 13.7822 10.676 13.7822 10.8405V15.4048C13.7822 15.5684 13.8457 15.7176 13.9499 15.8262C14.0524 15.9339 14.1965 16.0008 14.3543 16.0008H16.4279C16.585 16.0008 16.7282 15.9347 16.8324 15.8262C16.9357 15.7193 17 15.5693 17 15.4048V10.8413C17 10.6777 16.9365 10.5285 16.8324 10.4199C16.7298 10.3122 16.5858 10.2453 16.4279 10.2453ZM15.6255 15.5133C15.6255 15.3768 15.5197 15.2683 15.3903 15.2683C15.2593 15.2683 15.1551 15.3785 15.1551 15.5133C15.1551 15.6498 15.2609 15.7583 15.3903 15.7583C15.5213 15.7583 15.6255 15.6481 15.6255 15.5133ZM16.7583 15.0817H14.0231V11.1686H16.7583V15.0817Z" fill="#E11B4C"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8843 8H7.24821C7.11149 8 7 8.11616 7 8.25861V14.2194C7 14.3618 7.11149 14.478 7.24821 14.478H13.2419V13.3986H7.74626C7.625 13.3986 7.52653 13.2952 7.52653 13.1697V8.71563C7.52653 8.5893 7.62581 8.4867 7.74626 8.4867H15.3854C15.5067 8.4867 15.6051 8.59014 15.6051 8.71563V9.82215H16.1325V8.25861C16.1325 8.11616 16.021 8 15.8843 8ZM11.8853 13.9387C11.8853 13.7547 11.742 13.6064 11.5662 13.6064C11.3896 13.6064 11.2472 13.7556 11.2472 13.9387C11.2472 14.1227 11.3905 14.2711 11.5662 14.2711C11.742 14.2711 11.8853 14.1219 11.8853 13.9387Z" fill="#E11B4C"/>
							<path d="M12.6917 14.835H10.4399C10.4416 15.3081 10.1868 15.6278 9.83936 15.8906H13.2931C12.8577 15.604 12.6974 15.2411 12.6917 14.835Z" fill="#E11B4C"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7647 20.1262C14.8304 20.6599 13.8963 21.1935 12.9618 21.7264C12.332 22.0856 11.6892 22.0934 11.0604 21.7362C9.48667 20.8416 7.91557 19.9431 6.3442 19.0444L6.34153 19.0429C5.54674 18.5883 4.75187 18.1338 3.95655 17.6796C3.32373 17.3184 3.00534 16.7727 3.00336 16.0562C2.9984 13.3561 2.99939 10.656 3.00336 7.95585C3.00435 7.22855 3.32869 6.67989 3.96945 6.31477C4.86931 5.8013 5.76873 5.28725 6.66811 4.77323C8.12899 3.9383 9.59018 3.1032 11.0524 2.27097C11.6644 1.92254 12.3002 1.90389 12.9122 2.25134C15.3255 3.61858 17.7347 4.99268 20.1361 6.37857C20.7223 6.71719 20.996 7.26291 20.998 7.93524C20.9993 8.84022 20.9989 9.74564 20.9984 10.6509L20.998 12.0085C20.998 12.3419 20.9988 12.6752 20.9986 13.0085L20.9985 13.21C20.9978 14.144 20.9972 15.0778 21 16.012C21.002 16.7717 20.6707 17.3282 20.0051 17.7071C18.5909 18.5117 17.1773 19.3192 15.7647 20.1262ZM12.4664 20.8577C12.1349 21.0468 11.8683 21.045 11.5544 20.8667C9.98152 19.9726 8.41227 19.0751 6.84143 18.1768L6.83745 18.1745C6.04307 17.7202 5.24828 17.2657 4.45242 16.8112C4.12697 16.6255 4.00443 16.4078 4.00336 16.0539C3.9984 13.3553 3.99939 10.6566 4.00336 7.95732C4.00385 7.59712 4.12824 7.37524 4.46454 7.18361C5.36569 6.6694 6.2661 6.15479 7.1656 5.6407L7.16734 5.63971C8.62706 4.80544 10.0858 3.97176 11.5471 3.14007C11.8726 2.95474 12.1325 2.95857 12.4185 3.12096C14.83 4.48722 17.2375 5.86034 19.6359 7.24448C19.8752 7.38273 19.9969 7.57517 19.998 7.93819C19.9993 8.84143 19.9989 9.7443 19.9984 10.6482L19.9984 10.6598C19.9982 11.109 19.998 11.5586 19.998 12.0085V13.0085L19.9985 13.2072C19.9978 14.1418 19.9972 15.0787 20 16.0147C20.0006 16.244 19.9524 16.3911 19.8912 16.4949C19.8294 16.5999 19.72 16.7187 19.5106 16.8379C18.0964 17.6425 16.6822 18.4504 15.2691 19.2576L15.2674 19.2586C14.3332 19.7922 13.3994 20.3257 12.4664 20.8577Z" fill="#E11B4C"/>
							</svg>'
			),
			array(
				'label'  	=> 'Custom CSS',
				'name'   	=> 'custom-css',
				'pro'	=> false,
				'active' 	=> true,
				'icon'   	=> '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="24" height="24" fill="white"/>
							<path d="M7.82524 11.3905L12.2857 9.57413H7.66538L7.44568 7.83588H16.5542L16.3746 9.57407L12.0296 11.3905H16.2215L15.742 16.781L12.0466 17.8358L8.33104 16.7616L8.09132 14.0467H9.929L10.0489 15.453L12.0266 15.9413L14.084 15.3749L14.2239 13.1092L7.97147 13.0898L7.97125 13.0871L7.96501 13.0897L7.82524 11.3905Z" fill="#E11B4C"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7647 20.1262C14.8304 20.6599 13.8963 21.1935 12.9618 21.7264C12.332 22.0856 11.6892 22.0934 11.0604 21.7362C9.48667 20.8416 7.91557 19.9431 6.3442 19.0444L6.34153 19.0429C5.54674 18.5883 4.75187 18.1338 3.95655 17.6796C3.32373 17.3184 3.00534 16.7727 3.00336 16.0562C2.9984 13.3561 2.99939 10.656 3.00336 7.95585C3.00435 7.22855 3.32869 6.67989 3.96945 6.31477C4.86931 5.8013 5.76873 5.28725 6.66811 4.77323C8.12899 3.9383 9.59018 3.1032 11.0524 2.27097C11.6644 1.92254 12.3002 1.90389 12.9122 2.25134C15.3255 3.61858 17.7347 4.99268 20.1361 6.37857C20.7223 6.71719 20.996 7.26291 20.998 7.93524C20.9993 8.84022 20.9989 9.74564 20.9984 10.6509L20.998 12.0085C20.998 12.3419 20.9988 12.6752 20.9986 13.0085L20.9985 13.21C20.9978 14.144 20.9972 15.0778 21 16.012C21.002 16.7717 20.6707 17.3282 20.0051 17.7071C18.5909 18.5117 17.1773 19.3192 15.7647 20.1262ZM12.4664 20.8577C12.1349 21.0468 11.8683 21.045 11.5544 20.8667C9.98152 19.9726 8.41227 19.0751 6.84143 18.1768L6.83745 18.1745C6.04307 17.7202 5.24828 17.2657 4.45242 16.8112C4.12697 16.6255 4.00443 16.4078 4.00336 16.0539C3.9984 13.3553 3.99939 10.6566 4.00336 7.95732C4.00385 7.59712 4.12824 7.37524 4.46454 7.18361C5.36569 6.6694 6.2661 6.15479 7.1656 5.6407L7.16734 5.63971C8.62706 4.80544 10.0858 3.97176 11.5471 3.14007C11.8726 2.95474 12.1325 2.95857 12.4185 3.12096C14.83 4.48722 17.2375 5.86034 19.6359 7.24448C19.8752 7.38273 19.9969 7.57517 19.998 7.93819C19.9993 8.84143 19.9989 9.7443 19.9984 10.6482L19.9984 10.6598C19.9982 11.109 19.998 11.5586 19.998 12.0085V13.0085L19.9985 13.2072C19.9978 14.1418 19.9972 15.0787 20 16.0147C20.0006 16.244 19.9524 16.3911 19.8912 16.4949C19.8294 16.5999 19.72 16.7187 19.5106 16.8379C18.0964 17.6425 16.6822 18.4504 15.2691 19.2576L15.2674 19.2586C14.3332 19.7922 13.3994 20.3257 12.4664 20.8577Z" fill="#E11B4C"/>
							</svg>'
			),
			array(
				'label'  			=> 'Visibility Control',
				'name'   			=> 'visibility-control',
				'pro'			=> true,
				'active' 			=> true,
				'icon'   			=> '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.2791 10.3849L11.9471 10.3524C10.9893 10.3524 10.2129 11.1494 10.2129 12.132C10.2129 13.1154 10.9893 13.9125 11.9471 13.9125C12.9049 13.9125 13.6813 13.1154 13.6813 12.132C13.6813 12.0919 13.6797 12.0526 13.6772 12.0134C13.5234 12.1053 13.346 12.1571 13.1572 12.1571C12.568 12.1571 12.0911 11.6508 12.0911 11.0258C12.0911 10.7877 12.1611 10.5671 12.2791 10.3849Z" fill="#E11B4C"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9455 11.8981C16.3856 10.8545 15.6475 9.99558 14.7905 9.4032C13.9539 8.82585 13.0059 8.5 12 8.5C10.9941 8.5 10.0452 8.82585 9.20947 9.4032C8.35254 9.99558 7.61442 10.8545 7.05452 11.8981L7 12L7.05452 12.1011C7.61442 13.1447 8.35254 14.0036 9.21029 14.5968C10.0452 15.1741 10.9941 15.5 12 15.5C13.0059 15.5 13.9548 15.1741 14.7905 14.596C15.6466 14.0036 16.3856 13.1447 16.9455 12.1011L17 12L16.9455 11.8981ZM14.1785 10.0691C14.8442 10.5295 15.4229 11.1929 15.8704 12C15.4229 12.8071 14.8442 13.4705 14.1785 13.9301C13.5226 14.3829 12.7829 14.6386 12 14.6386C11.2179 14.6386 10.4774 14.3829 9.82227 13.9301C9.15658 13.4705 8.57715 12.8071 8.12956 12C8.57796 11.1929 9.15658 10.5295 9.82227 10.0691C10.4774 9.61626 11.2179 9.36059 12 9.36059C12.7829 9.36059 13.5234 9.61626 14.1785 10.0691Z" fill="#E11B4C"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7647 20.1262C14.8304 20.6599 13.8963 21.1935 12.9618 21.7264C12.332 22.0856 11.6892 22.0934 11.0604 21.7362C9.48667 20.8416 7.91557 19.9431 6.3442 19.0444L6.34153 19.0429C5.54674 18.5883 4.75187 18.1338 3.95655 17.6796C3.32373 17.3184 3.00534 16.7727 3.00336 16.0562C2.9984 13.3561 2.99939 10.656 3.00336 7.95585C3.00435 7.22855 3.32869 6.67989 3.96945 6.31477C4.86931 5.8013 5.76873 5.28725 6.66811 4.77323C8.12899 3.9383 9.59018 3.1032 11.0524 2.27097C11.6644 1.92254 12.3002 1.90389 12.9122 2.25134C15.3255 3.61858 17.7347 4.99268 20.1361 6.37857C20.7223 6.71719 20.996 7.26291 20.998 7.93524C20.9993 8.84022 20.9989 9.74564 20.9984 10.6509L20.998 12.0085C20.998 12.3419 20.9988 12.6752 20.9986 13.0085L20.9985 13.21C20.9978 14.144 20.9972 15.0778 21 16.012C21.002 16.7717 20.6707 17.3282 20.0051 17.7071C18.5909 18.5117 17.1773 19.3192 15.7647 20.1262ZM12.4664 20.8577C12.1349 21.0468 11.8683 21.045 11.5544 20.8667C9.98152 19.9726 8.41227 19.0751 6.84143 18.1768L6.83745 18.1745C6.04307 17.7202 5.24828 17.2657 4.45242 16.8112C4.12697 16.6255 4.00443 16.4078 4.00336 16.0539C3.9984 13.3553 3.99939 10.6566 4.00336 7.95732C4.00385 7.59712 4.12824 7.37524 4.46454 7.18361C5.36569 6.6694 6.2661 6.15479 7.1656 5.6407L7.16734 5.63971C8.62706 4.80544 10.0858 3.97176 11.5471 3.14007C11.8726 2.95474 12.1325 2.95857 12.4185 3.12096C14.83 4.48722 17.2375 5.86034 19.6359 7.24448C19.8752 7.38273 19.9969 7.57517 19.998 7.93819C19.9993 8.84143 19.9989 9.7443 19.9984 10.6482L19.9984 10.6598C19.9982 11.109 19.998 11.5586 19.998 12.0085V13.0085L19.9985 13.2072C19.9978 14.1418 19.9972 15.0787 20 16.0147C20.0006 16.244 19.9524 16.3911 19.8912 16.4949C19.8294 16.5999 19.72 16.7187 19.5106 16.8379C18.0964 17.6425 16.6822 18.4504 15.2691 19.2576L15.2674 19.2586C14.3332 19.7922 13.3994 20.3257 12.4664 20.8577Z" fill="#E11B4C"/>
									</svg>',
				'screenshotUrl'	=> trailingslashit( ULTIMATE_BLOCKS_URL ) . 'includes/pro_manager/assets/img/visibility-control/visibility-control.png'
			),
		);
	}
}