<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
	'jsonErrorDepth'         => '최대 스택 깊이 초과', // Maximum stack depth exceeded
	'jsonErrorStateMismatch' => 'Underflow 또는 modes 불일치', // Underflow or the modes mismatch
	'jsonErrorCtrlChar'      => '예상치 못한 제어 문자 존재', // Unexpected control character found
	'jsonErrorSyntax'        => 'JSON 구문 오류', // Syntax error, malformed JSON
	'jsonErrorUtf8'          => 'UTF-8 문자열 구문 오류. 인코딩이 잘못되었을 수도 있습니다.', // Malformed UTF-8 characters, possibly incorrectly encoded
	'jsonErrorUnknown'       => '알 수 없는 에러', // Unknown error
	'abstractCastMissing'    => '{0} 클래스는 CodeIgniter\EntityCast\AbstractCast 클래스를 상속해야합니다.', // The {0} class must inherit the CodeIgniter\EntityCast\AbstractCast class.
	'wrongCastMethod'        => '캐스트에 허용되는 메소드는 "get"및 "set"입니다.', // Allowed methods for cast is "get" and "set".
	'invalidTimestamp'       => '"timestamp" 캐스팅 유형은 timestamp여야 합니다.', // Type casting "timestamp" expects a correct timestamp.
];
