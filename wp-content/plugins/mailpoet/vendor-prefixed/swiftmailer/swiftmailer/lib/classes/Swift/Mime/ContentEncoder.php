<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Mime_ContentEncoder extends Swift_Encoder
{
 public function encodeByteStream(Swift_OutputByteStream $os, Swift_InputByteStream $is, $firstLineOffset = 0, $maxLineLength = 0);
 public function getName();
}
