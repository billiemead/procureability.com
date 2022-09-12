
# WP Engine, Git & GitHub Set-up

Git is a powerful development tool which enables developers or a development team to securely push code changes from their local machine to the ProcureAbility sites on WP Engine with the benefit of version control.


## Appendix

[1. SSH Key](#ssh-key)

[2. Create SSH Config](#create-ssh-config)

[3. Add SSH Key](#add-ssh-key)

[4. Confirm Git Access](#confirm-git-access)

[5. Clone Dev Environment](#clone-dev-environment)

[6. Add Remotes](#add-remotes)

[7. More Info](#more-info)

- - - -

## SSH Key ##

#### Generate SSH Key ####

1. Open a Terminal window
    
    a. Mac: Use the Spotlight utility and type `terminal`
    
    b. Windows: Use Git Bash
2. Use ssh-keygen to generate a new key as shown below. Be sure to replace `your_email@example.com` with your own email address
```
  ssh-keygen -t ed25519 -C "your_email@example.com" -f ~/.ssh/wpegitkey
```
3. Leave the passphrase blank by hitting enter or return again, leaving it blank without typing anything
* If you wish to set a password you may, however the security benefit is debatable and it cannot be recovered if lost
 
4. Press enter or return again to confirm the password entry


5. Doing this will generate your public/private key pair


6. Print and copy the text of your new public key file, called `wpegitkey.pub`
```
cat ~/.ssh/wpegitkey.pub
```

7. Copy and use this output when adding a key on the Git push page in the User Portal


8. Key content will begin with `ssh-ed25519` and end with the email address you used in the keygen command previously

- - - -


## Create SSH Config

#### Create SSH Config File on Local Computer ####

The SSH config file tells your computer which key file to use when connecting to a specific server hostname. SSH Gateway and Git use different hostnames on WP Engine and we do not recommend using the same key for both.

By setting up a SSH config file now, and telling your computer in advance which SSH key is used for which service, you will prevent any possible connection issues down the road.

1. On your local machine, first navigate to your .ssh directory

    a. MacOS – Open Terminal and type:
```
cd ~/.ssh/
```

b. Windows – Use Git Bash and navigate to:
`C:/Users/[youruser]/.ssh/`


2. Create the config file by running:

```
touch config
```
* If the file already exists, proceed to the next step

3. Open the new config file by running:

```
nano config
```

4. Once open, use the arrow keys to ensure you’re at the very bottom of the file

5. Paste the following contents:
```
Host git.wpengine.com
   User git
   Hostname git.wpengine.com
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/wpegitkey
   IdentitiesOnly yes
```

6. To save and exit the nano editor:
* Hold ctrl button then press x

If you are using a different key file than what we generated previously, be sure to update ~/.ssh/wpegitkey to your own private key file path.
## Add SSH Key ##

#### Add SSH Key to WP Engine User Portal ####

To securely use Git with a WP Engine environment, you must add your SSH key to the User Portal in the Git Push section. Your key must be added to each environment independently that you wish to use Git push with.

If you need to generate a key, review the previous step here. We do not recommend using the same SSH key for both Git and SSH Gateway.

1. Navigate to the User Portal

2. Select the environment name

3. Then click Git push from the left-hand navigation

4. Fill in a Developer name
* If you choose a username that is already in use, you will receive an error and will be prompted to choose another username

5. Paste the contents of your public key in the SSH public key field

* This is the key generated in the previous step Generate SSH Key
* Ensure there are no extra spaces or line breaks before or after the key

6. Click Add Developer

    Your key will typically be published approximately 10 minutes after saving, but may take as long as 45 minutes. In the meantime you will see an error if you try to connect to Git in the following steps.

- - - -

## Confirm Git Access ##

#### Confirm WP Engine Git Access ####

Now that you’ve created your keys, added them to WP Engine and configured an SSH config file, let’s make sure the SSH config file is functioning.

Run the following command in your terminal:

````
ssh git@git.wpengine.com info
````

- - - -

## Clone Dev Environment ##

#### Clone GitHub Development Environment from GitHub ####

(WP core, plugins are not included)

````
git@github.com:ProcureAbility-com/procureabi2dev.git
````

- - - -

## Add Remotes ##

#### Add WP Engine and GitHub Remotes ####

The next step is to map your local repository to the remote endpoints where you will deploy file changes on WP Engine. If you added your key to production, staging, and development environments within your site in the first step, you will need to add a remote for each of these environments.

1. First, navigate to the local Git directory that you have created:

````
cd ~/path/to/localcopy
````

2. Then add your remotes individually:

````
git remote add development git@git.wpengine.com:production/procureabi2dev.git
````

````
git remote add origin git@github.com:ProcureAbility-com/procureabi2dev.git
````
- - - -

## More Info ##

#### TAKEN FROM WP ENGINE ONLINE SUPPORT #### 

There is a lot more information for setup and troubleshooting that can be found at Wp Engine:

https://wpengine.com/support/git/


- - - -

## 🔗 Git Repo Link

[![githib](https://img.shields.io/badge/github-000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ProcureAbility-com/procureabi2dev/)

