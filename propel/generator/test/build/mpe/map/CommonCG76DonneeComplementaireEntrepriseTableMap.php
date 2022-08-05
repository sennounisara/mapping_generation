<?php



/**
 * This class defines the structure of the 'CG76_Donnee_Complementaire_entreprise' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonCG76DonneeComplementaireEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCG76DonneeComplementaireEntrepriseTableMap';

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
        $this->setName('CG76_Donnee_Complementaire_entreprise');
        $this->setPhpName('CommonCG76DonneeComplementaireEntreprise');
        $this->setClassname('CommonCG76DonneeComplementaireEntreprise');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('Ref', 'Ref', 'SMALLINT', true, null, null);
        $this->addColumn('idInscrit', 'Idinscrit', 'SMALLINT', true, 5, 0);
        $this->addColumn('IdEntreprise', 'Identreprise', 'INTEGER', true, null, 0);
        $this->addColumn('type_formation', 'TypeFormation', 'VARCHAR', false, 100, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('cout_moyen_journee', 'CoutMoyenJournee', 'VARCHAR', false, 10, null);
        $this->addColumn('collaboration_fpt', 'CollaborationFpt', 'INTEGER', true, 1, 0);
        $this->addColumn('collaboration_fpe', 'CollaborationFpe', 'INTEGER', true, 1, 0);
        $this->addColumn('centre_documentation', 'CentreDocumentation', 'INTEGER', true, 1, 0);
        $this->addColumn('service_reprographie', 'ServiceReprographie', 'INTEGER', true, 1, 0);
        $this->addColumn('salle_info', 'SalleInfo', 'INTEGER', true, 1, 0);
        $this->addColumn('salle_cours', 'SalleCours', 'INTEGER', true, 1, 0);
        $this->addColumn('aire_geo_inter', 'AireGeoInter', 'VARCHAR', false, 255, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCG76DonneeComplementaireEntrepriseTableMap
