map "/" do
    use Rack::Static, 
          :urls => [""], :root => "public", :index => 'index.erb'
    run lambda {|*|}
end

