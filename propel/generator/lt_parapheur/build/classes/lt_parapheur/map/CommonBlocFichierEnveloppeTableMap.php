<?php



/**
 * This class defines the structure of the 'blocFichierEnveloppe' table.
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
class CommonBlocFichierEnveloppeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBlocFichierEnveloppeTableMap';

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
        $this->setName('blocFichierEnveloppe');
        $this->setPhpName('CommonBlocFichierEnveloppe');
        $this->setClassname('CommonBlocFichierEnveloppe');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_bloc_fichier', 'IdBlocFichier', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_fichier', 'IdFichier', 'INTEGER', true, null, 0);
        $this->addColumn('numero_ordre_bloc', 'NumeroOrdreBloc', 'INTEGER', true, 5, 0);
        $this->addColumn('id_blob_chiffre', 'IdBlobChiffre', 'INTEGER', true, null, 0);
        $this->addColumn('id_blob_dechiffre', 'IdBlobDechiffre', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBlocFichierEnveloppeTableMap
