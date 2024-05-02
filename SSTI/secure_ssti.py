from flask import *

app = Flask(__name__)

@app.route("/")
def home():
    output = request.args.get('name')
    if output:
        # Perform some validation/sanitization of user input before rendering the template
        # For example, you can use a whitelist approach to allow only certain characters or templates
        if any(char not in string.ascii_letters + string.digits + ' _-' for char in output):
            return "Invalid input"
        # Render the template only if the input is deemed safe
        output = render_template_string(output)
    else:
        output = "Test"
    return output

if __name__ == "__main__":
    app.run(debug=True, host="localhost", port=80)
