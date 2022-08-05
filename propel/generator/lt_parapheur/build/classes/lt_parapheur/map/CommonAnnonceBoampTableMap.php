<?php



/**
 * This class defines the structure of the 'AnnonceBoamp' table.
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
class CommonAnnonceBoampTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAnnonceBoampTableMap';

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
        $this->setName('AnnonceBoamp');
        $this->setPhpName('CommonAnnonceBoamp');
        $this->setClassname('CommonAnnonceBoamp');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_boamp', 'IdBoamp', 'INTEGER', true, 22, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        $this->addColumn('envoi_boamp', 'EnvoiBoamp', 'INTEGER', true, 22, 0);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('ann_xml', 'AnnXml', 'BLOB', true, null, null);
        $this->addColumn('ann_pdf', 'AnnPdf', 'BLOB', true, null, null);
        $this->addColumn('ann_form_values', 'AnnFormValues', 'BLOB', true, null, null);
        $this->addColumn('ann_error', 'AnnError', 'CLOB', true, null, null);
        $this->addColumn('type_boamp', 'TypeBoamp', 'LONGVARCHAR', true, null, null);
        $this->addColumn('type_ann', 'TypeAnn', 'INTEGER', true, null, 0);
        $this->addColumn('datepub', 'Datepub', 'VARCHAR', true, 10, '0000-00-00');
        $this->addColumn('num_ann', 'NumAnn', 'INTEGER', true, null, 0);
        $this->addColumn('parution', 'Parution', 'LONGVARCHAR', true, null, null);
        $this->addColumn('id_jo', 'IdJo', 'VARCHAR', true, 255, '');
        $this->addColumn('erreurs', 'Erreurs', 'LONGVARCHAR', true, null, null);
        $this->addColumn('nom_fichier_xml', 'NomFichierXml', 'VARCHAR', true, 255, '');
        $this->addColumn('envoi_joue', 'EnvoiJoue', 'CHAR', true, null, '0');
        $this->getColumn('envoi_joue', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mapa', 'Mapa', 'CHAR', true, null, '0');
        $this->getColumn('mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('implique_SAD', 'ImpliqueSad', 'CHAR', true, null, '0');
        $this->getColumn('implique_SAD', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_maj', 'DateMaj', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_destination_form_xml', 'IdDestinationFormXml', 'INTEGER', true, null, 0);
        $this->addColumn('id_form_xml', 'IdFormXml', 'INTEGER', true, null, 0);
        $this->addColumn('id_type_xml', 'IdTypeXml', 'INTEGER', true, null, 0);
        $this->addColumn('statut_destinataire', 'StatutDestinataire', 'CHAR', true, 10, null);
        $this->addColumn('accuse_reception', 'AccuseReception', 'CHAR', true, null, '');
        $this->addColumn('lien', 'Lien', 'VARCHAR', true, 50, '');
        $this->addColumn('lien_boamp', 'LienBoamp', 'LONGVARCHAR', false, null, null);
        $this->addColumn('lien_pdf', 'LienPdf', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultationRelatedByOrganismeConsultationRef', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), null, null);
        $this->addRelation('CommonConsultationRelatedByConsultationRef', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('consultation_ref' => 'reference', ), null, null);
    } // buildRelations()

} // CommonAnnonceBoampTableMap
