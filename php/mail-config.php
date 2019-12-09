<?php
/**
 * mail-config.php
 * This file contains reCAPTCHA API keys and recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Brandon Huffman <bt_huffman@msn.com>
 *
 * THIS FILE IS gitignored!
 **/

//the SendGrid SMTP authorization
$smtpSecret = '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';

//Google reCAPTCHA keys
$siteKey = '6LfVEpQUAAAAALLJc7c9Ab3iM78_MmDDG5sBIm3-';
$secret = '6LfVEpQUAAAAAAGrQYVjyEDr4olBkFh0KnXE7XXL';

/**
 * notice this array can include or omit the recipient's name
 * using the recipients' real name reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["bhuffman4444@gmail.com", "Brandon Huffman"];
