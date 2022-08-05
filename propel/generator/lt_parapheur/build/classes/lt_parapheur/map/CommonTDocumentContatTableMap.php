<?php



/**
 * This class defines the structure of the 't_document_contat' table.
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
class CommonTDocumentContatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTDocumentContatTableMap';

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
        $this->setName('t_document_contat');
        $this->setPhpName('CommonTDocumentContat');
        $this->setClassname('CommonTDocumentContat');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_document', 'IdDocument', 'INTEGER', true, null, null);
        $this->addColumn('id_contrat', 'IdContrat', 'INTEGER', true, null, 0);
        $this->addColumn('type_document', 'TypeDocument', 'INTEGER', true, null, null);
        $this->addColumn('nom_document', 'NomDocument', 'VARCHAR', true, 100, null);
        $this->addColumn('titre_document', 'TitreDocument', 'VARCHAR', true, 255, null);
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_modification', 'DateModification', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('nom_agent', 'NomAgent', 'VARCHAR', false, 50, null);
        $this->addColumn('prenom_agent', 'PrenomAgent', 'VARCHAR', false, 50, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('taille_document', 'TailleDocument', 'VARCHAR', true, 50, null);
        $this->addColumn('extension_document', 'ExtensionDocument', 'VARCHAR', true, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTDocumentContatTableMap
