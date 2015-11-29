Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.33.31"
  config.vm.synced_folder "./", "/var/www", id: "vagrant-root", type: "nfs"
end
