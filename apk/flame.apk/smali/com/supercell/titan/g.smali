.class Lcom/supercell/titan/g;
.super Ljava/lang/Object;

# interfaces
.implements Landroid/opengl/GLSurfaceView$EGLConfigChooser;


# static fields
.field private static g:I

.field private static h:[I


# instance fields
.field protected a:I

.field protected b:I

.field protected c:I

.field protected d:I

.field protected e:I

.field protected f:I

.field private final i:[I


# direct methods
.method static constructor <clinit>()V
    .locals 4

    const/4 v3, 0x4

    sput v3, Lcom/supercell/titan/g;->g:I

    const/16 v0, 0x9

    new-array v0, v0, [I

    const/4 v1, 0x0

    const/16 v2, 0x3024

    aput v2, v0, v1

    const/4 v1, 0x1

    aput v3, v0, v1

    const/4 v1, 0x2

    const/16 v2, 0x3023

    aput v2, v0, v1

    const/4 v1, 0x3

    aput v3, v0, v1

    const/16 v1, 0x3022

    aput v1, v0, v3

    const/4 v1, 0x5

    aput v3, v0, v1

    const/4 v1, 0x6

    const/16 v2, 0x3040

    aput v2, v0, v1

    const/4 v1, 0x7

    sget v2, Lcom/supercell/titan/g;->g:I

    aput v2, v0, v1

    const/16 v1, 0x8

    const/16 v2, 0x3038

    aput v2, v0, v1

    sput-object v0, Lcom/supercell/titan/g;->h:[I

    return-void
.end method

.method public constructor <init>(IIIIII)V
    .locals 1

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    const/4 v0, 0x1

    new-array v0, v0, [I

    iput-object v0, p0, Lcom/supercell/titan/g;->i:[I

    iput p1, p0, Lcom/supercell/titan/g;->a:I

    iput p2, p0, Lcom/supercell/titan/g;->b:I

    iput p3, p0, Lcom/supercell/titan/g;->c:I

    iput p4, p0, Lcom/supercell/titan/g;->d:I

    iput p5, p0, Lcom/supercell/titan/g;->e:I

    iput p6, p0, Lcom/supercell/titan/g;->f:I

    return-void
.end method

.method private a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I
    .locals 2

    const/4 v0, 0x0

    iget-object v1, p0, Lcom/supercell/titan/g;->i:[I

    invoke-interface {p1, p2, p3, p4, v1}, Ljavax/microedition/khronos/egl/EGL10;->eglGetConfigAttrib(Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;I[I)Z

    move-result v1

    if-eqz v1, :cond_0

    iget-object v1, p0, Lcom/supercell/titan/g;->i:[I

    aget v0, v1, v0

    :cond_0
    return v0
.end method

.method private a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;[Ljavax/microedition/khronos/egl/EGLConfig;)Ljavax/microedition/khronos/egl/EGLConfig;
    .locals 17

    const/4 v8, 0x0

    const v7, 0xfffffff

    move-object/from16 v0, p3

    array-length v10, v0

    const/4 v1, 0x0

    move v9, v1

    :goto_0
    if-ge v9, v10, :cond_5

    aget-object v4, p3, v9

    const/16 v5, 0x3025

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v11

    const/16 v5, 0x3026

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->e:I

    if-lt v11, v2, :cond_4

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->f:I

    if-ge v1, v2, :cond_1

    move v1, v7

    move-object v4, v8

    :cond_0
    :goto_1
    add-int/lit8 v2, v9, 0x1

    move v9, v2

    move v7, v1

    move-object v8, v4

    goto :goto_0

    :cond_1
    const/16 v5, 0x3024

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v11

    const/16 v5, 0x3023

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v12

    const/16 v5, 0x3022

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v13

    const/16 v5, 0x3021

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->a:I

    if-ne v11, v2, :cond_4

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->b:I

    if-ne v12, v2, :cond_4

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->c:I

    if-ne v13, v2, :cond_4

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->d:I

    if-ne v1, v2, :cond_4

    const/16 v5, 0x3032

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    if-nez v1, :cond_3

    move-object v8, v4

    :cond_2
    return-object v8

    :cond_3
    if-lt v1, v7, :cond_0

    :cond_4
    move v1, v7

    move-object v4, v8

    goto :goto_1

    :cond_5
    if-nez v8, :cond_2

    const v7, 0x7fffffff

    move-object/from16 v0, p3

    array-length v10, v0

    const/4 v1, 0x0

    move v9, v1

    :goto_2
    if-ge v9, v10, :cond_2

    aget-object v4, p3, v9

    const/16 v5, 0x3025

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->e:I

    sub-int v11, v1, v2

    const/16 v5, 0x3026

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->f:I

    sub-int v12, v1, v2

    const/16 v5, 0x3024

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->a:I

    sub-int v13, v1, v2

    const/16 v5, 0x3023

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->b:I

    sub-int v14, v1, v2

    const/16 v5, 0x3022

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->c:I

    sub-int v15, v1, v2

    const/16 v5, 0x3021

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    move-object/from16 v0, p0

    iget v2, v0, Lcom/supercell/titan/g;->d:I

    sub-int v16, v1, v2

    const/16 v5, 0x3032

    const/4 v6, 0x0

    move-object/from16 v1, p0

    move-object/from16 v2, p1

    move-object/from16 v3, p2

    invoke-direct/range {v1 .. v6}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;Ljavax/microedition/khronos/egl/EGLConfig;II)I

    move-result v1

    add-int/lit8 v1, v1, 0x0

    mul-int v2, v11, v11

    mul-int v3, v12, v12

    add-int/2addr v2, v3

    mul-int v3, v13, v13

    add-int/2addr v2, v3

    mul-int v3, v14, v14

    add-int/2addr v2, v3

    mul-int v3, v15, v15

    add-int/2addr v2, v3

    mul-int v3, v16, v16

    add-int/2addr v2, v3

    mul-int/2addr v1, v1

    add-int/2addr v1, v2

    if-ge v1, v7, :cond_6

    :goto_3
    add-int/lit8 v2, v9, 0x1

    move v9, v2

    move v7, v1

    move-object v8, v4

    goto/16 :goto_2

    :cond_6
    move v1, v7

    move-object v4, v8

    goto :goto_3
.end method


# virtual methods
.method public chooseConfig(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;)Ljavax/microedition/khronos/egl/EGLConfig;
    .locals 6

    const/4 v4, 0x0

    const/4 v0, 0x1

    new-array v5, v0, [I

    sget-object v2, Lcom/supercell/titan/g;->h:[I

    const/4 v3, 0x0

    move-object v0, p1

    move-object v1, p2

    invoke-interface/range {v0 .. v5}, Ljavax/microedition/khronos/egl/EGL10;->eglChooseConfig(Ljavax/microedition/khronos/egl/EGLDisplay;[I[Ljavax/microedition/khronos/egl/EGLConfig;I[I)Z

    aget v4, v5, v4

    if-gtz v4, :cond_0

    new-instance v0, Ljava/lang/IllegalArgumentException;

    const-string/jumbo v1, "No configs match configSpec"

    invoke-direct {v0, v1}, Ljava/lang/IllegalArgumentException;-><init>(Ljava/lang/String;)V

    throw v0

    :cond_0
    new-array v3, v4, [Ljavax/microedition/khronos/egl/EGLConfig;

    sget-object v2, Lcom/supercell/titan/g;->h:[I

    move-object v0, p1

    move-object v1, p2

    invoke-interface/range {v0 .. v5}, Ljavax/microedition/khronos/egl/EGL10;->eglChooseConfig(Ljavax/microedition/khronos/egl/EGLDisplay;[I[Ljavax/microedition/khronos/egl/EGLConfig;I[I)Z

    invoke-direct {p0, p1, p2, v3}, Lcom/supercell/titan/g;->a(Ljavax/microedition/khronos/egl/EGL10;Ljavax/microedition/khronos/egl/EGLDisplay;[Ljavax/microedition/khronos/egl/EGLConfig;)Ljavax/microedition/khronos/egl/EGLConfig;

    move-result-object v0

    return-object v0
.end method
