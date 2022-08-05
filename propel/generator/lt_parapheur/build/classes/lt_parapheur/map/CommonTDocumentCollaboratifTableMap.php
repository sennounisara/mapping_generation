<?php



/**
 * This class defines the structure of the 't_document_collaboratif' table.
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
class CommonTDocumentCollaboratifTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTDocumentCollaboratifTableMap';

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
        $this->setName('t_document_collaboratif');
        $this->setPhpName('CommonTDocumentCollaboratif');
        $this->setClassname('CommonTDocumentCollaboratif');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_document', 'IdDocument', 'INTEGER', true, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', true, null, 0);
        $this->addColumn('id_theme_parapheur', 'IdThemeParapheur', 'INTEGER', true, null, null);
        $this->addColumn('id_objet', 'IdObjet', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('titre_document', 'TitreDocument', 'VARCHAR', true, 255, null);
        $this->addColumn('type_document', 'TypeDocument', 'INTEGER', true, null, null);
        $this->addColumn('type_objet', 'TypeObjet', 'INTEGER', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_modification', 'DateModification', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_createur', 'IdCreateur', 'INTEGER', false, null, null);
        $this->addColumn('nom_createur', 'NomCreateur', 'VARCHAR', false, 50, null);
        $this->addColumn('prenom_createur', 'PrenomCreateur', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTDocumentCollaboratifTableMap
