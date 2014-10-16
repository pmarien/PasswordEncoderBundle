# Pma/PasswordEncoderBundle
This Bundle gives some usefull services for your Symfony-Application.

## Services
### MultiEncoder
    pma.password_encoder

This Encoder for the Symfony-Security-System encodes a password with different algorithms.

#### How to use?
To use this encoder, please write the following into your security.yml-File:

     encoders:
        YOUR\UserClass:
            id: pma.password_encoder
