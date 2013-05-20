map "/" do
    use Rack::Static, 
          :urls => [""], :root => "public", :index => 'index.erb.html'
    run lambda {|*|}
end

