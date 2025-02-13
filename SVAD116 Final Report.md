# Cloud Providers Considered
## From the Perspective of a Large Company
##### AWS
For large companies requiring extensive scalability and a wide range of services, AWS is the top choice. It offers enterprise-level solutions with scalable infrastructure across multiple regions, ensuring high availability and redundancy. AWS provides robust security compliance certifications and excellent customer support for premium customers. However, it has a steep learning curve and can be costly if not managed carefully.
##### Azure
Azure is another strong contender, especially for businesses already using Microsoft products like Windows or Office 365. It offers advanced AI and machine learning tools, high scalability, and strong security features. While Azure integrates seamlessly with Microsoft ecosystems, its cost may be higher compared to AWS, and it has a less diverse third-party ecosystem.
##### Google Cloud
Google Cloud is ideal for companies focused on AI and data analytics. Its scalable infrastructure supports large-scale processing, and it offers cost-effective pricing for high usage. However, Google Cloud’s unique nature can pose a steep learning curve for those unfamiliar with its platform.
##### IBM Cloud
IBM Cloud is best suited for organizations needing hybrid cloud solutions. It provides extensive AI tools, emphasizes security, and offers enterprise-grade support. While IBM Cloud is highly secure, it may be more expensive than AWS or Google, and navigating the IBM ecosystem can be challenging for newcomers.
##### Digital Ocean
DigitalOcean, while less feature-rich compared to larger providers, is a cost-effective option with a user-friendly interface. It’s perfect for smaller businesses seeking simplicity and affordability without complex features. However, it lacks advanced scalability options for larger enterprises.
## From the Perspective of a Small Company
##### Digital Ocean
Small companies often prioritize simplicity and affordability over extensive features. DigitalOcean stands out in this category, offering an easy-to-use platform with straightforward pricing and excellent customer support. Despite its advantages, small businesses may face constraints as they grow due to the lack of advanced features compared to AWS or Azure.

##### AWS
AWS also offers flexibility for smaller businesses through a pay-as-you-go model, reducing upfront costs while providing access to high-quality tools. However, the initial setup can be daunting, and hidden costs may arise without careful monitoring. Azure provides cost-effective solutions when integrated with Microsoft products but requires investment in other Microsoft services to maximize savings.

##### Google Cloud
Google Cloud is another viable option for small businesses, offering scalable solutions without large upfront costs. Its affordable pricing and flexible payment options make it a good fit for growing companies. However, the limited third-party ecosystem compared to AWS might be a drawback.

##### IBM Cloud
IBM Cloud provides no significant upfront costs and offers access to AI tools with dedicated account managers for small businesses. Despite its strengths, it may be more expensive than alternatives and requires learning if not already familiar with IBM products.

## From the Perspective of a Student/Personal User
#### Hostinger
Students and personal users often seek affordable, easy-to-use solutions for website hosting or small projects. Hostinger is ideal in this category, offering extremely affordable pricing plans with a user-friendly interface. It provides a wide range of hosting options, including free domain registration with some plans, along with strong customer support. However, it lacks advanced features compared to more technical platforms like Linode.
##### Linode
Linode appeals to technically inclined users who need high customization and performance. Its pay-as-you-go model and focus on security make it suitable for developers. While Linode is more expensive than Hostinger, its community support and reliability are significant advantages. Conversely, its platform can be overwhelming for non-technical users.
##### AWS
AWS offers affordable pricing tiers for personal projects or small applications, along with extensive documentation and community support. However, the steep learning curve without prior experience can be a challenge. Google Cloud is excellent for developers interested in AI, machine learning, or data analytics, offering a free tier for experimentation and integration with Google Workspace tools. Despite its strengths, the platform's complexity may pose challenges for those new to cloud services.
##### DigitalOcean
DigitalOcean is also ideal for students and personal users seeking a simple, affordable way to host applications or websites. Its transparent pricing model and strong community support make it accessible even for less technical users. However, it may lack some advanced features needed for more complex projects.
# Best Cloud Providers
### Large Company
AWS is for large companies needing extensive scalability and a wide range of services. Can afford the steep learning curve and cost.
### Small Company
DigitalOcean is perfect for small businesses seeking simplicity and affordability without complex features.
### Student/Individual
Hostinger is ideal for individuals looking for an affordable, easy-to-use solution for website hosting or VPS.
# Web Server
#### How it was Created
The server is running using Nginx to display PHP to users. The PHP code came from the tutorials on W3Schools.

### User interactivity
The user can interact with the website by filling out a form that the user can submit to see their input.

# Weekly SSH Logs
### Unauthorized SSH Summary

| IP address      | Count | Week | Country   |
| --------------- | ----- | ---- | --------- |
| 116.110.87.79   | 9     | 4    | Vietnam   |
| 116.110.87.68   | 9     | 4    | Vietnam   |
| 116.105.217.102 | 7     | 4    | Vietnam   |
| 34.47.125.117   | 7     | 4    | Korea     |
| 163.5.142.213   | 5     | 4    | France    |
| 43.199.194.5    | 5     | 4    | Hong Kong |
| 154.84.61.148   | 5     | 4    | U.S.A     |
| 185.33.53.48    | 5     | 4    | Hungary   |
| 64.227.32.227   | 4     | 4    | UK        |
| 120.157.43.188  | 4     | 4    | Australia |

| IP address     | Count | Week | Country    |
| -------------- | ----- | ---- | ---------- |
| 68.183.95.116  | 28    | 5    | India      |
| 125.91.108.190 | 5     | 5    | China      |
| 103.92.216.41  | 5     | 5    | Bangladesh |
| 170.64.135.157 | 5     | 5    | Australia  |
| 159.75.95.9    | 4     | 5    | China      |
| 138.197.72.150 | 4     | 5    | U.S.A      |
| 36.64.211.93   | 3     | 5    | Indonesia  |
| 103.160.132.4  | 2     | 5    | India      |
| 47.245.88.245  | 2     | 5    | Singapore  |
| 37.112.54.2    | 2     | 5    | Russia     |

| IP address     | Count | Week | Country |
| -------------- | ----- | ---- | ------- |
| 64.227.190.117 | 19    | 6    | India   |
| 118.193.39.245 | 5     | 6    | H.K     |
| 103.17.118.179 | 5     | 6    | H.K     |
| 193.122.139.72 | 5     | 6    | U.S.A   |
| 206.162.203.60 | 5     | 6    | U.S.A   |
| 45.91.238.180  | 4     | 6    | Poland  |
| 84.196.188.202 | 3     | 6    |         |
| 101.168.34.59  | 3     | 6    |         |
| 109.195.19.44  | 2     | 6    |         |
| 14.29.185.190  | 1     | 6    |         |

# How to Secure SSH


# Weekly HTTP Logs


# How to Secure HTTP
Understanding the OWASP Top Ten for Web Security is crucial for web server admins and developers to protect sensitive data, maintain system integrity, and ensure user trust. Knowing these risks and proactively mitigating common attack vectors, meeting industry standards and regulations, and ensuring a secure user experience are essential to fostering user trust.
### 1. Broken Access Control
Broken Access Control refers to weaknesses that allow unauthorized users to access resources or perform actions beyond their intended permissions. To mitigate this risk, it's crucial to implement Role-Based Access Control (RBAC), use Access Control Lists (ACLs), and regularly audit permissions. Implementing least privilege principles ensures users have only the necessary permissions to perform their tasks. Additionally, consider employing deny-by-default access controls and conducting regular security assessments to identify and remediate access control vulnerabilities.
### 2. Cryptographic Failures
Cryptographic Failures occur when sensitive data is inadequately protected through encryption. To prevent this, ensure the use of strong encryption algorithms and avoid deprecated protocols. For example, use TLS (Transport Layer Security) to encrypt data in transit and AES (Advanced Encryption Standard) for data at rest. Regularly review and update your cryptographic libraries and key management practices. Additionally, use cryptographic hash functions like SHA-256 for data integrity checks and avoid using custom encryption schemes.
### 3. Injection
Injection attacks, such as SQL injection, occur when untrusted data is sent to an interpreter as part of a command or query. This can be prevented by using prepared statements and parameterized queries, validating and sanitizing inputs, and employing Object-Relational Mapping (ORM). Additionally, ensure that input validation includes checking for unexpected or malicious input and use libraries and frameworks that automatically handle input sanitization and escaping. Employing a Web Application Firewall (WAF) can also provide an additional layer of defense against injection attacks.
### 4. Insecure Design
Insecure Design involves flaws in the design of an application that can lead to security vulnerabilities. To address this risk, adopt secure design principles from the start of the development process. Conduct threat modeling and security design reviews to identify potential vulnerabilities early. Use security frameworks and libraries that follow best practices and regularly update them. Additionally, incorporate secure coding standards and practices into your development lifecycle, and provide ongoing security training for developers.
### 5. Security Misconfiguration
Security misconfigurations occur when security settings are not properly defined, implemented, or maintained. Mitigating this risk involves automating configuration management, regularly updating and patching software, and disabling unnecessary features. Ensure that security configurations are consistent across all environments, from development to production. Use infrastructure-as-code tools to manage configurations and apply security baselines to ensure consistency. Regularly perform security assessments and audits to identify and remediate misconfigurations.
### 6. Vulnerable and Outdated Components
Vulnerable and outdated components, such as libraries, frameworks, and other software modules, can expose applications to security risks. To manage this risk, regularly check for updates and use dependency management tools to track and update components. Replace unsupported components with secure alternatives and conduct regular security assessments to identify and address vulnerabilities in third-party components. Additionally, consider using Software Composition Analysis (SCA) tools to automate the identification of vulnerable dependencies.
### 7. Identification and Authentication Failures
Identification and Authentication Failures occur when authentication mechanisms are weak or improperly implemented. To prevent this, implement Multi-Factor Authentication (MFA), enforce strong password policies, and secure session management. Ensure that password storage mechanisms use strong hashing algorithms, such as bcrypt or Argon2, and implement account lockout policies to protect against brute force attacks. Additionally, use secure authentication protocols, such as OAuth and OpenID Connect, to protect user credentials.
### 8. Software and Data Integrity Failures
Software and Data Integrity Failures occur when code and data are susceptible to unauthorized modifications. To mitigate this risk, implement code signing and integrity checks for software updates. Use cryptographic hash functions to verify the integrity of data and files. Additionally, employ secure development practices, such as code reviews and static analysis, to identify and address vulnerabilities in the codebase. 
### 9. Insufficient Logging and Monitoring
Insufficient Logging and Monitoring occur when applications fail to generate or retain sufficient logs, making it difficult to detect and respond to security incidents. To mitigate this risk, implement comprehensive logging of all user activities, errors, and security events. Ensure logs are stored securely and regularly monitored for suspicious activities. Use automated monitoring tools to detect anomalies and respond promptly to potential threats.
### 10. Insecure Dependencies
Insecure Dependencies occur when applications use libraries, frameworks, or other software components with known vulnerabilities. To mitigate this risk, regularly update all dependencies to their latest secure versions. Use tools to scan for vulnerabilities in dependencies and remove or replace any that are outdated or insecure. Implement a policy for vetting third-party components before integrating them into your application.
