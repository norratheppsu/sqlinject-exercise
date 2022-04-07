import hashlib

inp = "abc"
expected = '25fa'
while True:
    md5Digest = hashlib.md5(inp.encode('utf-8')).hexdigest()
    #print(md5Digest[0:4], expected);
    if md5Digest[0:4] == expected:
        print('Password: ', inp, md5Digest)
        break;
    inp = md5Digest
