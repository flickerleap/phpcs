<?php

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

class DisallowEnvUsageSniff implements Sniff
{
    public function register()
    {
        return [T_STRING];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        if(array_slice(explode('/',$phpcsFile->path), -2, 1)[0] == 'config') {
            return;
        }

        $tokens = $phpcsFile->getTokens();

        if ($tokens[$stackPtr]['content'] === 'env') {
            $error = 'env function usage is prohibited, use the config function instead';
            $data = array(trim($tokens[$stackPtr]['content']));
            $phpcsFile->addError($error, $stackPtr, 'Found', $data);
        }
    }
}
