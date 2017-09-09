.class Lcom/supercell/titan/cn;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Lcom/facebook/GraphResponse;

.field final synthetic b:Lcom/supercell/titan/cm;


# direct methods
.method constructor <init>(Lcom/supercell/titan/cm;Lcom/facebook/GraphResponse;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/cn;->b:Lcom/supercell/titan/cm;

    iput-object p2, p0, Lcom/supercell/titan/cn;->a:Lcom/facebook/GraphResponse;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 1

    iget-object v0, p0, Lcom/supercell/titan/cn;->a:Lcom/facebook/GraphResponse;

    invoke-virtual {v0}, Lcom/facebook/GraphResponse;->getJSONObject()Lorg/json/JSONObject;

    move-result-object v0

    if-eqz v0, :cond_0

    invoke-virtual {v0}, Lorg/json/JSONObject;->toString()Ljava/lang/String;

    move-result-object v0

    :goto_0
    invoke-static {v0}, Lcom/supercell/titan/NativeFacebookManager;->facebookFriends(Ljava/lang/String;)V

    return-void

    :cond_0
    const-string/jumbo v0, ""

    goto :goto_0
.end method
