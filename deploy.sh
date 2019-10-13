#!/bin/bash

# Packaging everything to a zip file
zip -r deploy.zip . -x *deploy*

# TODO: Uploading it to Azure webservice