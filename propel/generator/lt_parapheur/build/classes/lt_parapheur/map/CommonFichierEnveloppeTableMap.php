<?php



/**
 * This class defines the structure of the 'fichierEnveloppe' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonFichierEnveloppeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonFichierEnveloppeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('fichierEnveloppe');
        $this->setPhpName('CommonFichierEnveloppe');
        $this->setClassname('CommonFichierEnveloppe');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_fichier', 'IdFichier', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_enveloppe', 'IdEnveloppe', 'INTEGER', true, null, 0);
        $this->addColumn('type_fichier', 'TypeFichier', 'CHAR', true, 3, '');
        $this->addColumn('num_ordre_fichier', 'NumOrdreFichier', 'INTEGER', true, 5, 0);
        $this->addColumn('nom_fichier', 'NomFichier', 'LONGVARCHAR', true, null, null);
        $this->addColumn('taille_fichier', 'TailleFichier', 'VARCHAR', true, 50, '');
        $this->addColumn('signature_fichier', 'SignatureFichier', 'LONGVARCHAR', true, null, null);
        $this->addColumn('hash', 'Hash', 'LONGVARCHAR', true, null, null);
        $this->addColumn('verification_certificat', 'VerificationCertificat', 'VARCHAR', true, 5, '');
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', false, null, null);
        $this->addColumn('id_blob_signature', 'IdBlobSignature', 'INTEGER', false, null, null);
        $this->addColumn('type_piece', 'TypePiece', 'INTEGER', true, 10, 3);
        $this->addColumn('id_type_piece', 'IdTypePiece', 'INTEGER', true, 10, 0);
        $this->addColumn('is_hash', 'IsHash', 'CHAR', true, null, '0');
        $this->getColumn('is_hash', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('nom_referentiel_certificat', 'NomReferentielCertificat', 'VARCHAR', false, 255, null);
        $this->addColumn('statut_referentiel_certificat', 'StatutReferentielCertificat', 'INTEGER', false, 1, null);
        $this->addColumn('nom_referentiel_fonctionnel', 'NomReferentielFonctionnel', 'VARCHAR', false, 255, null);
        $this->addColumn('message', 'Message', 'VARCHAR', false, 255, null);
        $this->addColumn('date_signature', 'DateSignature', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonFichierEnveloppeTableMap
