<?php
namespace MailPoetVendor\Twig\Node\Expression\Binary;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class StartsWithBinary extends AbstractBinary
{
 public function compile(Compiler $compiler)
 {
 $left = $compiler->getVarName();
 $right = $compiler->getVarName();
 $compiler->raw(\sprintf('(is_string($%s = ', $left))->subcompile($this->getNode('left'))->raw(\sprintf(') && is_string($%s = ', $right))->subcompile($this->getNode('right'))->raw(\sprintf(') && (\'\' === $%2$s || 0 === strpos($%1$s, $%2$s)))', $left, $right));
 }
 public function operator(Compiler $compiler)
 {
 return $compiler->raw('');
 }
}
\class_alias('MailPoetVendor\\Twig\\Node\\Expression\\Binary\\StartsWithBinary', 'MailPoetVendor\\Twig_Node_Expression_Binary_StartsWith');
