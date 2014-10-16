# Pma/PasswordEncoderBundle [![Build Status](https://travis-ci.org/pmarien/PasswordEncoderBundle.svg)](https://travis-ci.org/pmarien/PasswordEncoderBundle)[![SensioLabsInsight](https://insight.sensiolabs.com/projects/7ab310fd-5780-448f-91e6-3380be58d3fb/small.png)](https://insight.sensiolabs.com/projects/7ab310fd-5780-448f-91e6-3380be58d3fb)
This Bundle offers an Encoder for the Symfony-Security-System which combines 
various hash algorithms for secure passwords.

## Service
    pma.password_encoder

This Encoder for the Symfony-Security-System encodes a password with different algorithms.

#### How to use?
To use this encoder for encoding your user passwords, 
please write the following into your security.yml-File:

     encoders:
        YOUR\UserClass:
            id: pma.password_encoder
