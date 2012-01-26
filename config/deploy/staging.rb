# repository info
set :branch, "master"

# This may be the same as your `Web` server
role :app, "mac.ccistaging.com"

# directories
set :deploy_to, "/home/staging/subdomains/mac"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[plg_ie6 public template]
