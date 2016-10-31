<?php namespace JF;
/**

Copyright 2016 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-7be94b
Date:    2016-10-06 10:33:58
Version: v1.0-rc24
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-7be94b",
    "email": {
        "to": "info@allan-wade.com",
        "cc": "jmcdonald@allan-wade.com",
        "bcc": "",
        "subject": "New Lead - Get Started With Us",
        "template": "You receive an email from {sender.fullname}.\n\nThe web form data:\n{dataTable}\n\nReference ID: {AutoID}\nIP: {IP}\nDate: {Date}\nTime: {Time}\nWebsite: {HTTP_HOST}\nReferer: {HTTP_REFERER}\n",
        "fromName": "Get Started",
        "sendmail_from": "jmcdonald.consultant@gmail.com"
    },
    "admin": {
        "users": "admin:4e6f7",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "http:\/\/www.allan-wade.com\/engage-thank-you.php",
        "message": "",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "smtp.gmail.com",
        "user": "jmcdonald.consultant@gmail.com",
        "password": "Rumcake99",
        "port": "465",
        "security": "ssl"
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": false,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": false
        }
    },
    "logics": [
        {
            "disabled": false,
            "action": "",
            "selector": "",
            "match": "",
            "rules": [

            ]
        }
    ],
    "fields": [
        {
            "label": "Your Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "cid": "c2"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "cid": "c42"
        },
        {
            "label": "Web Link",
            "field_type": "website",
            "required": true,
            "field_options": {
                "placeholder": "http:\/\/",
                "validators": {
                    "url": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "description": "Provide us with your website so that we can start reviewing it right away."
            },
            "cid": "c36"
        },
        {
            "label": "Comments",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-edit"
                },
                "description": "Tell us as much or as little as you would like to."
            },
            "cid": "c3"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "Engage!",
                "icon": "",
                "checkRequiredFields": ""
            },
            "cid": "c100"
        }
    ],
    "autoResponse": {
        "subject": "Getting started with The Allan Wade Company",
        "template": "Dear {sender.fullname},\n\nThank you for filling out the form. Here is the copy of your data:\n{dataTable}\n\nWe will contact you shortly.\n\nBest Regards,\n{HTTP_HOST}\n\n\nReference ID: {AutoID}\nYour IP: {IP}\nDate: {Date}\nTime: {Time}\n",
        "replyTo": "info@allan-wade.com",
        "replyToName": "Sales Team"
    },
    "twilio": {
        "toPhone": "5196712764",
        "toTemplate": "{sender.fullname} just submitted a web form.\n\nThe web form data:\n{dataText}\n\nReference ID: {AutoID}\nIP: {IP}\nDate: {Date}\nTime: {Time}\nWebsite: {HTTP_HOST}\nReferer: {HTTP_REFERER}\n",
        "autoResponseTemplate": "Dear {sender.fullname},\n\nWe have received your request:\n{dataText}\n\nThank you.\n"
    }
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class