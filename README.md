# Project 5 - Encryption

Time spent: 10 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  * [x]  Required: Encrypt a response and include in this README:
         6VN4dY3iQ67fZDiTsB2rMYgb+yDFRjJp3mBSqeHma4g=

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code

6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README:

         Body:
          2jGwnk1W6qf1qyWjTcaI+CSQE1joDe8k+15JGlEM8iEFZQE3Beq9EC1cALwbs90LZX5VyurDSg1Si84teXz76RQ5dV3u3TnWJ4XpaBJQRpvjJ+XSGbmcBc3SE2UcUH9hYOWjiNY7FYShfL4w5bHwzF9kBW4lX96QoKvDXteOFCqolRce6afyzHc1yKsQuzkK4iZ9vwZFE19UhNPidKTJiRKtEi3tBnOG1Kj69O1hCnWH2uduX9cNCbw3dEtAstTr60mQ7vIqbCI+aD8harQZH0F4X17eEChhkvvOx7BPHmjTtOzFNHyxzRSlR9LZUUTUTcMVNpLaV1q01pG2PHwubA==

         Public Key:
          -----BEGIN PUBLIC KEY-----
          MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqimZ9ohXVGxlzSBUf59q
          PzjUWPthuhrAhPANKtxX7dir0FS/6Y5IFqrWKSxNKPEPW8kapD89HjUCE1Qm9eak
          MoOP0zKj/TDOjvvJdWeG2qUUzdXoP1o+IjbQU+At6t9qsYt6Uqn92l/p9lFmbsFs
          8p5STM1sc/uvirPPTA/l8amOA5ZUIvBli7TGiT1XUxEJt6MfO7eWrsnqrbo+diam
          6fGcBd/JHyG5PV1m1UUHgLR3B0LMGH7iIkETvcCzTrlMM4RieGdKugvyyf31g30p
          Op/MbbRFiT0sdZHJoJqgUlIhr0ydCBJ0et4BT3mGos1kte0M+ZTE5orxj0Xn3U5w
          3QIDAQAB
          -----END PUBLIC KEY-----

         Signature:
          ICXMD8by9ch8HhJZRXrpb4NMdFwVmzjOV1gDBggwGcZe1vS4HGus/mHCONP2R6dcIRoXPamPgPIDCzPz6qnAJq5GFXv7wy3G6++ChJc+KvhwAxszil02UNV+cz6/ZaYwlafLbW77r5HR1JQqwCnh2othq1k5fQ4x6t+RFeYESIqAYa2SU8Mj5U3BlhG2vrd7K9N2P1nIoFBfZ4chYi4kuwlDyKIsD11PBoeVrmj2p1gRF9rSsOiEArG3qP6/1+FloqWAg2GqDwtQ5I6hFiUGb/MUTPUJoyvxLSdXrTGAxeTbGexYXCzV0xX7LPuyGv5+vat2E0BHJYHDSODYPQOBgA==

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: Natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [x ]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [x]  Write a report of your discoveries (longer than 300 characters).
  * [x]  Compose a secure email for sending over an insecure network.
  * [x]  Include the email with your encrypted report in this README:

        To: apex_hq
        From: agent_99
        Subject: Bugs Report

        Key: XDSNpJs8R0vZ9wsVD8RCn4EpdHDZHIXB41Axbx4ewQ6CkJKzH8IsZZ6bb/Qs7uSXDcQId8Lb4zQirhYSOQ/5IDR4Z91Y0oWhSkLb77ppUQDA9/E7ahLrfSX1SXxlqv8rsSedVeu2WcUv/9u9Js8wRiEzZ0zlpI0NUc1zpj/fzGLIYOdpmxknG6BClqToe1xO308AB8643K45HUDBGI2M5XhGav5a96dDCyfCBwmlK28r4ROBxZJGAIId4h460SvXwbKdDcuxMLLWG8GK2vJt0Qld4CNieoKCZxZZa5PqB5jenLVBKFpEmM6J6xxHgol/TeT6qNz8c9qIskCrKdr+tg==

        Encryted Message: oiNCLnOOemWXjPZ3dJ43CQ4goHrGJF0CX95VzosQ0K2VRn/gInEohcmbIO0A0YgQFhzLjH7U9uDdunJhXzsQkmwbgjOetwBubpsxTH2yRlgDVczkc4JNLjZB3gNYlf7a+V/oUyIk+85zPHw6J1f4I2zvsR7YNr7Lq+8HFHdMGMR13kQA2pOKVHSv061h3bI4kywBmnTTD5jPtx4IAWbSEwMCXz1SXoGdUkpAJ3iO1a7e6bzfx804l91CHXrvs+6kBKlRl2jRboagLFP30d+nPpjOJW2j5H8WDeY0ULdN0S7kqzK74azm4LoUGxLRztXeBos0MYhSzFvCA2F0TzV90htHlijHDb145xl643YNV3ygWAGFnhPiYzb/YcxZmB1p8XJSHHDyitzJcZj8Q0IoKY73h4PzT6Y27MULHnmJUsU9OEvBVzcQfW9YlhG8tdHb

        Signature(Using encryted key and encryted message):
        WQV1/iDTvPpKnXzI35SB6ZZS4wkjJpiTSQY8q7rV+W7+1qZ2WnWW8qp+U64WyLDtFmt4Slj2vOCWD6suKAUvRle4Hp7xXxRmbT/a7lIPXa7e/mqPvJLA241+bsl9XamiftpULkVvgDn/Wt2SaDkXQkOKoQ87whH86UoVm6YXAVKmG9DjYVPNmVUuOyoHJwzfhyR0wDJG0dQNMEg0f7PFE9992lr363HQU42Lfo2naj4ZwU3DPXSBgfKCx3x9f2IzMzJxi+4kkJ2gY/TZjyFIIyYi0jDqIhLHq6l0AMl9KYN6b0Q3N/yPvLJKrhmzY39DmdSt8l7qtY6v35O4flx+hw==

* Bonus Objective 3\.
  * [x]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [x]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/BKgkm5k.gif' title='Video Walkthrough' width='300px' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Ki Yin Kenny Lam]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
