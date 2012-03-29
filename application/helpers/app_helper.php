<?php

/**
 * 2012-3-18 17:58:04
 * 博客函数库
 * @author paperen<paperen@gmail.com>
 * @link http://iamlze.cn
 * @version 0.0
 * @package paperenblog
 * @subpackage application/helpers/
 */

/**
 * 引入CSS
 * @param string $css css文件
 * @return string
 */
function css( $css )
{
	$css = strpos( $css, 'http://' ) !== FALSE ? $css : base_url( 'theme' ) . '/' . trim( config_item( 'theme' ), '/' ) . '/' . $css;
	return "<link href=\"{$css}\" rel=\"stylesheet\">";
}

/**
 * 引入JS
 * @param string $js js文件
 * @return string
 */
function js( $js )
{
	$js = strpos( $js, 'http://' ) !== FALSE ? $js : rtrim( base_url( 'js' ), '/' ) . '/' . $js;
	return "<script src=\"{$js}\"></script>";
}

/**
 * 生成页面标题
 * @param string $page_title 标题
 * @return string
 */
function page_title( $page_title = '', $delimiter = '&raquo;' )
{
	$page_title = empty( $page_title ) ? config_item( 'sitename' ) : config_item( 'sitename' ) . ' ' . $delimiter . ' ' . $page_title;
	return "<title>{$page_title}</title>";
}

/**
 * 获取文章片段
 * @param string $content 文章内容
 * @param string $delimiter 分割标识符
 * @return string
 */
function get_post_fragment( $content, $delimiter = '<!--more-->' )
{
	if ( strpos( $content, $delimiter ) === FALSE ) return $content;
	return array_shift( explode( $delimiter, $content ) );
}

/**
 * 根據UNIX時間戳獲取中文的星期
 * @param int $unixtime UNIX時間戳[option]
 * @return string
 */
function get_weekday_from_unixtime( $unixtime = '' )
{
	$unixtime = empty( $unixtime ) ? time() : $unixtime;
	$weekday_CN = array( '日', '壹', '貳', '叁', '肆', '伍', '陸' );
	return $weekday_CN[date( 'w', $unixtime )];
}

/**
 * 根據UNIX時間戳獲取時間距離的描述
 * @param int $unixtime 時間戳
 * @return string
 */
function get_time_diff( $unixtime, $prefix = '<strong>', $subfix = '</strong>' )
{
	$now = time();
	if ( $unixtime > $now ) return '未來進行時';
	$diff = $now - $unixtime;
	if ( $diff >= 0 && $diff < 60 )
	{
		return "{$prefix}{$diff}{$subfix}秒前";
	}
	else if ( $diff >= 60 && $diff < 3600 )
	{
		$min = floor( $diff / 60 );
		return "{$prefix}{$min}{$subfix}分鐘前";
	}
	else if ( $diff >= 3600 && $diff < 86400 )
	{
		$hour = floor( $diff / 3600 );
		return "{$prefix}{$hour}{$subfix}小時前";
	}
	else if ( $diff >= 86400 && $diff < 2592000 )
	{
		$day = floor( $diff / 86400 );
		return "{$prefix}{$day}{$subfix}天前";
	}
	else if ( $diff >= 2592000 && $diff < 31104000 )
	{
		$month = floor( $diff / 2592000 );
		return "{$prefix}{$month}{$subfix}月前";
	}
	else
	{
		$year = floor( $diff / 31104000 );
		return "{$prefix}{$year}{$subfix}年前";
	}
}

if ( !function_exists( 'gbk_substr' ) )
{
	/**
	 * 文本截取
	 * @param string $str 中文文本
	 * @param int $length 截取长度
	 * @return string 截取后的文本
	 */
	function gbk_substr( $string, $length, $from = 0 )
	{
		$string = strip_tags( $string );
		if ( $length == 0 )
		{
			return $string;
		}
		else
		{
			return preg_replace( '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $from . '}' .
					'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $length . '}).*#s', '$1', $string );
		}
	}
}

/**
 * 为连接附加http
 * @param string $url URL
 * @return string 补全后的URL
 */
function add_http( $url )
{
	$str = 'http://';
	if ( strpos( $url, $str ) === FALSE ) return $str . $url;
	return $url;
}
// end of app_helper